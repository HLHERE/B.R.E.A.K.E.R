<footer class="py-6 bg-navbar">
    <div class="container px-6 mx-auto space-y-6 divide-y dark:divide-gray-400 md:space-y-12 divide-opacity-50">
        <div class="grid grid-cols-12">
            <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                    <div class="flex items-center justify-center w-[200px] h-[200px] rounded-full dark:bg-violet-400">
                        <img src="/../img/GlamGroove.png" alt="GlamGroove">
                    </div>
                    <span class="self-center text-5xl font-Ghetto text-putih"> GlamGroove</span>
                </a>
            </div>
            <div class="col-span-6 text-center md:text-left md:col-span-3 text-putih">
                <p class="pb-1 text-xl font-Arial">Features</p>
                <ul>
                    <li>
                        <a rel="noopener noreferrer" href="/" class="hover:dark:text-violet-400">Hot News</a>
                    </li>
                    <li>
                        <a rel="noopener noreferrer" href="/posts" class="hover:dark:text-violet-400">News</a>
                    </li>
                    <li>
                        <a rel="noopener noreferrer" href="/about" class="hover:dark:text-violet-400">About</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-6 text-center md:text-left md:col-span-3 text-putih">
                <p class="pb-1 text-xl font-Arial">News</p>
                <ul>
                    @foreach ($categoryList as $item)
                        <li>
                            <a rel="noopener noreferrer" href="/posts?category={{ $item->slug }}"
                                class="hover:dark:text-violet-400">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="grid justify-center pt-6 lg:justify-between text-putih">
            <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                <span>GlamGroove 2023 All rights reserved</span>
            </div>
        </div>
    </div>
</footer>
