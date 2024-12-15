<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>GlamGroove</title>
    <link rel="icon" type="image/png" sizes="500x500" href="/../img/GlamGroove.png">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body class="flex flex-col">
    @include('dashboard.layout.header')

    <div class="flex-1 flex">
        @include('dashboard.layout.sidebar')

        <div class="flex-1 flex items-center justify-center pb-8">
            @yield('container')
        </div>
    </div>
</body>

</html>
