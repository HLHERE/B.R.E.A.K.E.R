@extends('dashboard.layout.main')


@section('container')
    @livewire('user-dashboard')
    {{-- <table class="relative w-full overflow-x-auto shadow-md sm:rounded-lg ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-left w-12">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-left w-48">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left w-32">
                    Username
                </th>
                <th scope="col" class="px-6 py-3 text-left w-32">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left w-32">
                    Action
                </th>
                
            </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">
                    {{$loop->iteration}}
                </td>
                <td class="px-6 py-4">
                    {{$user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$user->username}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>   
                <td class="px-6 py-4 flex items-center">
                    <form action="/dashboard/user/{{$user->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 me-1 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="return confirm('Are you sure want to delete this User?')">Delete</button>
                    </form>                
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
            
        @endforeach
    </table>
</div> --}}
@endsection
