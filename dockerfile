# Usar a imagem oficial do PHP com extensões necessárias
FROM php:8.1-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl

# Instala as extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto
COPY . .

# Define permissões corretas
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Executa o Composer para instalar as dependências
RUN composer install --optimize-autoloader --no-dev

# Expor a porta padrão do Laravel
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
