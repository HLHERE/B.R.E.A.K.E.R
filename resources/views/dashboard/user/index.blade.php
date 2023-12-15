@extends('dashboard.layout.main')




@section('container')



<div class="relative top-[125px] w-[1000px]  overflow-x-auto shadow-md sm:rounded-lg"> <!-- Tambahkan class 'mx-auto' di sini -->
    <table class="relative w-full overflow-x-auto shadow-md sm:rounded-lg ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-left">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Color
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Category
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">
                    Apple MacBook Pro 17"
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 flex items-center">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <span class="mx-2">|</span>
                    <a href="#" class="font-medium text-red-500 dark:text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

@endsection