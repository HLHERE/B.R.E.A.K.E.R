<!-- component -->
@if (session()->has('loginSuccess'))
<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ms-3 text-sm font-medium">
    {{ session('loginSuccess') }}
  </div>
  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div>    
@endif
@if (session()->has('Success'))
<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ms-3 text-sm font-medium">
    {{ session('Success') }}
  </div>
  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div>    
@endif
<div class="container shadow-md">
    <nav class="flex px-[50px] md:shadow-lg items-center relative bg-navbar">
        <style>
            @media only screen and (min-width: 768px) {
                .parent:hover .child {
                    opacity: 1;
                    height: auto;
                    overflow: none;
                    transform: translateY(0);
                }

                .child {
                    opacity: 0;
                    height: 0;
                    overflow: hidden;
                    transform: translateY(-15%);
                }
            }
        </style>
        <div class="flex items-center justify-center h-28">
            <div class="mx-auto">
                <img src="/../img/GlamGroove.png" alt="GlamGroove" class="w-48 mt-28 mr-5">
            </div>
        </div>

        <ul class="md:px-2 ml-auto md:flex md:space-x-2 absolute md:relative top-full left-0 right-0 ">
            <li>
                <a href="/" class="flex md:inline-flex p-4 items-center">
                    <span class="text-putih">Home</span>
                </a>
            </li>
            <li>
                <a href="/about" class="flex md:inline-flex p-4 items-center">
                    <span class="text-putih">About</span>
                </a>
            </li>
            <li class="relative parent">
                <a href="#" class="flex justify-between md:inline-flex p-4 items-center space-x-2   ">
                    <span class="text-putih">News</span>
                    <svg class="w-3 h-3 text-putih dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                    </svg>
                </a>
                <ul
                    class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-putih md:shadow-lg md:rounded-b ">
                    @foreach ($categoryList as $item)
                        <li>
                            <a href="/posts?category={{ $item->slug }}" class="flex px-4 py-3 hover:bg-coklat">
                                {{ $item->name }}
                            </a>
                        </li>
                    @endforeach
                    {{-- <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                            Cartoons
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                            Film
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                            Music
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                            Technology
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li>
            </li>
            @auth
                <li class="relative parent">
                    <a href="#" class="flex justify-between md:inline-flex p-4 items-center space-x-2">
                        <span class="text-white">Welcome {{ auth()->user()->name }}</span>
                        <svg class="w-3 h-3 text-putih dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                        </svg>
                    </a>
                    <ul
                        class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-putih md:shadow-lg md:rounded-b ">
                        @can('admin')
                            <li>
                                <a href="/dashboard" class="flex px-4 py-3 hover:bg-coklat ">
                                    Dashboard
                                </a>
                            </li>
                        @endcan

                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="text-left pl-5 pr-32 py-2.5 hover:bg-coklat ">Logout</button>
                        </form>
                    </ul>
                </li>
            @else
                <li>
                    <a href="/login" class="flex md:inline-flex p-4 items-center">
                        <span class="text-white">Login</span>
                        <svg class="w-4 h-4 text-putih dark:text-white ml-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                    </a>
                </li>

            @endauth

            </li>
        </ul>
        <div class="ml-auto md:hidden text-gray-500 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path
                    d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
            </svg>
        </div>
    </nav>
</div>
