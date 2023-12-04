<!DOCTYPE html>
<html lang="id">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title') | Tasty Food</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/style.css') }}">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
   </head>

   <body>
      <div class="app">
         @include('sweetalert::alert')
         @yield('master')
         <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
      </div>
   </body>

</html>
