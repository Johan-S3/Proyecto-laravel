<!DOCTYPE html>
<html lang="es">
<head>
  @vite('resources/css/app.css')  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>@yield('header')</header>
  <main class="grid grid-cols-4 gap-4 justify-center w-screen">
    @yield('main')
  </main>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>