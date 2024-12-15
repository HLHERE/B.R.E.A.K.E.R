<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlamGroove Entertainment</title>
    <link rel="icon" type="image/png" sizes="500x500" href="/../img/GlamGroove.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')

    <div class="container bg-putih">
        @yield('container')
    </div>
    @include('partials.footer')
</body>

</html>
