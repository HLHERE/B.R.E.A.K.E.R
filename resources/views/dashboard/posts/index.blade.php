@extends('dashboard.layout.main')




@section('container')



<div class="relative top-[125px] w-[900px]  overflow-x-auto shadow-md sm:rounded-lg table-auto"> <!-- Tambahkan class 'mx-auto' di sini -->
    <table class="relative w-full overflow-x-auto shadow-md sm:rounded-lg ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-left w-12">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-left w-48">
                    title
                </th>
                <th scope="col" class="px-6 py-3 text-left w-32">
                    Category
                </th>
                <th scope="col" class="px-6 py-3 text-left w-32">
                    Action
                </th>
                
            </tr>
        </thead>
        
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">
                    1
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, alias ipsa similique iure pariatur qui veritatis accusamus commodi officia eligendi vel. Delectus cum corrupti laudantium, ipsum ullam nisi. Dicta, nostrum.
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>   
                <td class="px-6 py-4 flex items-center ">
                    <a href="#" class="font-medium text-yellow-400 dark:text-blue-500 hover:underline w-8">Edit</a>
                    <span class="mx-1">|</span>
                    <a href="#" class="font-medium text-red-500 dark:text-red-500 hover:underline w-8">Delete</a>
                </td>
                
                
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

@endsection