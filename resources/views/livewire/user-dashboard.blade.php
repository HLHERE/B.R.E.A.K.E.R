{{-- <div>
    <!-- Search Form -->
    <div class="flex mt-5 mb-5">
        <form wire:submit.prevent="searchPosts" method="GET">
            <div class="relative text-gray-600 focus-within:text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </span>
                <input type="text" name="search" wire:model="search" wire:keydown="updateSearch" class="py-3 text-sm pr-52 text-white rounded-md pl-16 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
            </div>
        </form>
    </div>
    <!-- End Search Form -->
    <div class="overflow-x-auto overflow-y-hidden max-w-full md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mt-4 ">
        @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">{{session('success')}}</span>
          </div>
            
        @endif
        <table class="w-full table-fixed shadow-md sm:rounded-lg">
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
                    <th scope="col" class="px-6 py-3 text-center w-32">
                        Email
                    </th>
                    <th scope="col" class="w-4/12 px-6 py-3 text-center max-w-sm">
                        Action
                    </th>
                    
                </tr>
            </thead>
            @foreach ($users as $index => $user )
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">
                        {{$users->firstItem() + $index}}
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
                    <td class="px-6 py-4 flex justify-center space-x-1 max-w-sm">
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
    </div>
    <div class="mt-3">
        
        {{ $users->links() }}
    </div>
</div> --}}
