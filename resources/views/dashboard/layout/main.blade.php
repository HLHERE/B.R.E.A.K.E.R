<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="flex flex-col min-h-screen">
    @include('dashboard.layout.header')

    <div class="flex-1 flex">
        @include('dashboard.layout.sidebar')

        <div class="flex-1 flex flex-col items-center justify-center pb-8">
            @yield('container')
        </div>
    </div>
</body>

</html>