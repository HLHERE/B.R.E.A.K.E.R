<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="flex flex-col items-center justify-center">
    <img src="/../img/GlamGroove.png" alt="GlamGroove" class="w-[100px] mb-5">
    <h2 class="text-center mb-5 font-Arial">List Post GlamGroove</h2>
    <div class="relative overflow-x-auto items-center">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    title
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Category
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$post->id}}                </th>
                <td class="px-6 py-4">
                    {{$post->title}}
                </td>
                <td class="px-6 py-4">
                    {{$post->category->name}}
                </td>
            </tr>
            @endforeach

    </table>
</div>
</body>
</html>