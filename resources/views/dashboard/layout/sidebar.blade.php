<aside class="fixed inset-y-0 left-0 bg-abu w-60 md:w-1/4 lg:w-1/5 xl:w-1/6 shadow-xl overflow-y-auto">
    <div class="flex-grow">
        <div class="w-[125px] ml-12">
            <img src="/../img/GlamGroove.png" alt="">
        </div>
        <div class="p-5">
            <ul class="space-y-2">
                <hr class="w-25 h-[1px] mx-auto bg-for_card border-0 rounded my-2 dark:bg-gray-700 shadow-lg">
                <li class="flex justify-center text-putih font-medium ">News</li>
                <a href="/dashboard/posts"
                    class="flex items-center bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4 {{ Request::is('dashboard/cposts') ? 'active' : '' }}">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                        <path d="M6 5H5v1h1V5Z" />
                    </svg>
                    Post
                </a>
                </li>
                <br>
                <hr
                    class="w-25 h-[2px] mx-auto my-3 bg-for_card border-0 rounded md:my-10 dark:bg-gray-700 mt-4 shadow-lg">
                <li class="flex justify-center text-putih font-medium">Account</li>
                <br>
                <li class="mt-4">
                    <a href="/dashboard/user"
                        class="flex bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4">
                        <svg class="w-4 h-4 text-black dark:text-white mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                            <path
                                d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        User
                    </a>
                </li>
                <br>
                <br>
                <br>
                <li>
                    @if (isset($tombolback) && $tombolback)
                <li class="mt-2">
                    <a href="/"
                        class="flex items-center   bg-putih hover:bg-coklat rounded-full font-bold text-sm text-gray-900 hover:text-putih py-3 px-4 my-24 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16" id="door">
                            <path fill="#212121"
                                d="M7.59806,2.00971 L12.5981,3.00971 C12.8318,3.05646 13,3.26166 13,3.49999909 L13,12.4969 C13,12.7352 12.8318,12.9404 12.5981,12.9872 L7.59806,13.9872 C7.45117,14.0166 7.29885,13.9785 7.18301,13.8836 C7.06716,13.7886 7,13.6467 7,13.4969 L7,2.49999909 C7.01911841,2.3308797 7.08012175,2.20199 7.18301,2.11333 C7.33734238,1.98034 7.45117,1.98034 7.59806,2.00971 Z M6,3 L6,12.9969 L3.5,12.9969 C3.25454222,12.9969 3.0503921,12.8199914 3.00805575,12.5867645 L3,12.4969 L3,3.5 C3,3.25454222 3.17687704,3.0503921 3.41012499,3.00805575 L3.5,3 L6,3 Z M9.5,7.49841 C9.22386,7.49841 9,7.72227 9,7.99841 C9,8.27456 9.22386,8.49841 9.5,8.49841 C9.77614,8.49841 10,8.27456 10,7.99841 C10,7.72227 9.77614,7.49841 9.5,7.49841 Z">
                            </path>
                        </svg>
                        back to web
                    </a>
                </li>
                @endif
                @if (isset($showButton) && $showButton)
                    <li class="mt-2">
                        <a href="/dashboard/"
                            class="flex items-center   bg-putih hover:bg-coklat rounded-full font-bold text-sm text-gray-900 hover:text-putih py-3 px-4 my-24 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" class="w-5 h-5 font-bold">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>
                            Menu
                        </a>
                    </li>
                @endif
                </li>
        </div>
    </div>
    </div>
</aside>
