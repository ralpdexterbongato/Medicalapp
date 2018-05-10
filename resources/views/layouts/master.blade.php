<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNVI</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    html {
     background-color: #ebebe0;
   }
    </style>
  </head>
  <body>
  @include('layouts.navbar')
  @yield('content')
  @include('layouts.footer')
      <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
