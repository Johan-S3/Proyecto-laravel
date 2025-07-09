<!DOCTYPE html>
<html lang="es">
<head>
  @vite('resources/css/app.css')  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="bg-[#C5BEB4]">
  <header>@yield('header')</header>
  <main class="w-full flex justify-center">
    @yield('main')
  </main>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>