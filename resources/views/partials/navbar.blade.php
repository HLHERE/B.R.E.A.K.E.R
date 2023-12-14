<!-- component -->
<div class="container">   
<nav class="flex px-10 border-b md:shadow-lg items-center relative bg-navbar z-10 ">
        <style>
            @media only screen and (min-width: 768px){
            .parent:hover .child {
                opacity:1;
                height:auto;
                overflow:none;
                transform: translateY(0);
            }
            .child {
                opacity:0;
                height:0;
                overflow:hidden;
                transform: translateY(-10%);
              }
            }
            </style>
            <div class="flex text-lg font-bold md:py-0 py-4">
                <img src="/../img/GlamGroove.png" alt="GlamGroove" class="w-20">
            </div>
            <ul class="md:px-2 ml-auto md:flex md:space-x-2 absolute md:relative top-full left-0 right-0">
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center">
                        <span class="text-white">Home</span>
                    </a>
                </li>
                <li class="relative parent">
                    <a href="#" class="flex justify-between md:inline-flex p-4 items-center  space-x-2">
                        <span class="text-white">News</span>
                        <svg class="w-3 h-3 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                          </svg>
                    </a>
                    <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-putih md:shadow-lg md:rounded-b ">
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-coklat ">    
                                Technology
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                                Game
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                                Anime
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <li class="relative parent">
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center space-x-2">
                            <span class="text-white">Self Development</span>
                            <svg class="w-3 h-3 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                              </svg>
                            </a>
                        <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-putih md:shadow-lg md:rounded-b ">
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                                    Education
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-coklat">
                                    Job
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex md:inline-flex p-4 items-center">
                            <span class="text-white">Merchandise</span>
                        </a>
                    </li>
                {{-- @auth
                <li class="relative parent">
                    <a href="#" class="flex justify-between md:inline-flex p-4 items-center space-x-2">
                        <span class="text-white">Welcome</span>
                        <svg class="w-3 h-3 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                          </svg>
                        </a>
                    <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-putih md:shadow-lg md:rounded-b ">
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-coklat ">
                                Logout
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-coklat">
                                Job
                            </a>
                        </li>
                    </ul>
                </li>


                @else
                
                
                @endauth --}}
                
                <li>
                    <a href="/login" class="flex md:inline-flex p-4 items-center">
                        <span class="text-white">Login</span>
                        <svg class="w-4 h-4 text-putih dark:text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                          </svg>
                    </a>
                </li>
            </li>
            </ul>
            <div class="ml-auto md:hidden text-gray-500 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
            </div>
        </nav>
    </div>