<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Investidor10 - Notícias</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container">
    <x-menu></x-menu>
    <div class="content">
      <h1>{{ $title }}</h1>
      {{ $slot }}
    </div>
  </div>
</body>
</html>

<style> 
  .container {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }

  .content {
    margin-left: 220px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
  }
</style>