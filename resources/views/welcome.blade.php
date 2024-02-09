<!--<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello, world!
  </h1>
</body>
</html>  -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 10 - REACT 18</title>
        @viteReactRefresh      
        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="codeareact"></div>
    </body>
</html>
