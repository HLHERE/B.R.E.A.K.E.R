<!-- component -->
<div class="min-h-screen">

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
    
        <nav class="flex px-4 border-b md:shadow-lg items-center relative bg-navbar">
            <div class="flex text-lg font-bold md:py-0 py-4">
                <img src="/../img/GlamGroove.png" alt="GlamGroove" class="w-40">
            </div>
            <ul class="md:px-2 ml-auto md:flex md:space-x-2 absolute md:relative top-full left-0 right-0">
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center">
                        <span class="text-white">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center">
                        <span class="text-white">Hot News</span>
                    </a>
                </li>
                <li class="relative parent">
                    <a href="#" class="flex justify-between md:inline-flex p-4 items-center  space-x-2">
                        <span class="text-white">News</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                    </a>
                    <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                Technology
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                Game
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                Anime
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <li class="relative parent">
                        <a href="#" class="flex justify-between md:inline-flex p-4 items-center space-x-2">
                            <span class="text-white">Self Development</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                        </a>
                        <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Education
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-50">
                                    Job
                                </a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
            <div class="ml-auto md:hidden text-gray-500 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
            </div>
        </nav>
    </div>
    
    