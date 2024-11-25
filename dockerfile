# Usar a imagem oficial do PHP com extensões necessárias
FROM php:8.1-fpm

# Instala as dependências do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    nodejs \
    npm

# Instala as extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www

# Copia os arquivos do projeto para o contêiner
COPY . .

# Instala as dependências do PHP
RUN composer install --optimize-autoloader --no-dev

# Instala as dependências do Node.js
RUN npm install

# Gera a chave do Laravel
RUN php artisan key:generate

EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
