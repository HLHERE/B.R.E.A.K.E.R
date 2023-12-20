<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlamGroove Entertainment</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    @include('partials.navbar')

    <div class=" bg-putih ">
          @yield('container')
    </div>

    @include('partials.footer')
</body>
</html>