@extends('layouts.main')

@section('container')
    <hr>
    <ul>
        @foreach ($categoryList as $item)
            <li>{{ $item->name }} : {{ $item->posts_count }}</li>
        @endforeach
    </ul>
    <hr><br>
    <ul>
        <h1><b>Random News</b></h1>
        @foreach ($posts as $item)
            <li>
                <strong>{{ $item['webTitle'] }}</strong><br>
                @if (!empty($item['thumbnail']))
                    <img src="{{ $item['thumbnail'] }}" alt="{{ $item['webTitle'] }}" style="max-width: 200px;"><br>
                @endif
                <p>{{ $item['publication'] }}</p>
                @if (!empty($item['authorImage']))
                    <img src="{{ $item['authorImage'] }}" alt="Author Image" width="50">
                @endif
                <p>In {{ $item['published'] }}</p>
                <p>Cartegory: {{ $item['cartegory'] }}</p>
                <em>By {{ $item['authorName'] }}</em><br>
                <article>{!! $item['body'] !!}</article>
                <a href="{{ $item['shortUrl'] }}" target="_blank">Read more</a>
            </li>
            <hr><br>
        @endforeach
    </ul>

    <ul>
        <h1><b>Popular Content</b></h1>
        @foreach ($popular as $item)
            <li>
                <strong>{{ $item['webTitle'] }}</strong><br>
                @if (!empty($item['thumbnail']))
                    <img src="{{ $item['thumbnail'] }}" alt="{{ $item['webTitle'] }}" style="max-width: 200px;"><br>
                @endif
                <p>{{ $item['publication'] }}</p>
                @if (!empty($item['authorImage']))
                    <img src="{{ $item['authorImage'] }}" alt="Author Image" width="50">
                @endif
                <p>In {{ $item['published'] }}</p>
                <p>Cartegory: {{ $item['cartegory'] }}</p>
                <em>By {{ $item['authorName'] }}</em><br>
                <article>{!! $item['body'] !!}</article>
                <a href="{{ $item['shortUrl'] }}" target="_blank">Read more</a>
            </li>
            <hr><br>
        @endforeach
    </ul>

    <div class="max-w-screen-xl mx-auto ">

        <section class="text-abu body-font mt-3  ">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="text-7xl font-Ghetto title-font mb-2 text-abu">Hot News</h1>
                        <div class="h-1 w-20 bg-coklat rounded"></div>
                    </div>
                    <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon
                        brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard
                        of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                </div>
        </section>

        <main class="mt-0">
            <div class="block md:flex md:space-x-2 px-2 lg:p-0">
                <a class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block" style="height: 24em;" href="#">
                    <div class="absolute left-0 bottom-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="/../img/valor.jpg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <h2 class="text-4xl font-semibold text-gray-100 leading-tight ">
                            {{-- {!! $posts[0]->title !!} --}}
                        </h2>
                    </div>
                </a>

                <a class="w-full md:w-1/3 relative rounded" style="height: 24em;" href="#">
                    <div class="absolute left-0 top-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="/../img/teknologi.jpg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <h2 class="text-3xl font-semibold text-gray-100 leading-tight">safddadsa</h2>
                    </div>
            </div>
            </a>

            <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
                <!-- post cards -->
                <div class="w-full lg:w-2/3">

                    <a class="block rounded w-full lg:flex mb-10" href="#">
                        <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                            style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                            title="deit is very important">
                        </div>
                        <div class="bg-putih rounded px-4 flex flex-col justify-between leading-normal">
                            <div>
                                <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                    {{-- {!! $posts[0]->title !!} --}}
                                </div>
                                <p class="text-gray-700 text-base">
                                    Duis euismod est quis lacus elementum, eu laoreet dolor consectetur.
                                    Pellentesque sed neque vel tellus lacinia elementum. Proin consequat ullamcorper
                                    eleifend.
                                </p>
                            </div>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/86.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="rounded w-full lg:flex mb-10">
                        <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                            style="background-image: url('https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                            title="deit is very important">
                        </div>
                        <div class="bg-putih rounded px-4 flex flex-col justify-between leading-normal">
                            <div>
                                <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                    {{-- {!! $posts[0]->title !!} --}}
                                </div>
                                <p class="text-gray-700 text-base">
                                    Nam malesuada aliquet metus, ac commodo augue mollis sit amet.
                                    Nam bibendum risus sit amet metus semper consectetur.
                                    Proin consequat ullamcorper eleifend.
                                    Nam bibendum risus sit amet metus semper consectetur.
                                </p>
                            </div>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/women/54.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm capitalize"> Serenity Hughes </p>
                                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded w-full lg:flex mb-10">
                        <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                            style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                            title="deit is very important">
                        </div>
                        <div class="bg-putih rounded px-4 flex flex-col justify-between leading-normal">
                            <div>
                                <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                    Suspendisse varius justo eu risus laoreet fermentum non aliquam dolor
                                </div>
                                <p class="text-gray-700 text-base">
                                    Mauris porttitor, velit at tempus vulputate, odio turpis facilisis dui,
                                    vitae eleifend odio ipsum at odio. Phasellus luctus scelerisque felis eget suscipit.
                                </p>
                            </div>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/86.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="w-full lg:w-1/3 px-3">
                    <!-- topics -->
                    <div class="mb-4">
                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> Categories </h5>
                        <ul>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" class='mr-1'
                                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M339.3 367.1c27.3-3.9 51.9-19.4 67.2-42.9L568.2 74.1c12.6-19.5 9.4-45.3-7.6-61.2S517.7-4.4 499.1 9.6L262.4 187.2c-24 18-38.2 46.1-38.4 76.1L339.3 367.1zm-19.6 25.4l-116-104.4C143.9 290.3 96 339.6 96 400c0 3.9 .2 7.8 .6 11.6C98.4 429.1 86.4 448 68.8 448H64c-17.7 0-32 14.3-32 32s14.3 32 32 32H208c61.9 0 112-50.1 112-112c0-2.5-.1-5-.2-7.5z" />
                                    </svg>
                                    Art & Design
                                    <span class="text-gray-500 ml-auto">23 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="17" width="17" class='mr-1'
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm130.7 57.9c-4.2-13.6 7.1-25.9 21.3-25.9H364.5c14.2 0 25.5 12.4 21.3 25.9C369 368.4 318.2 408 258.2 408s-110.8-39.6-127.5-94.1zm2.8-183.3l89.9 47.9c10.7 5.7 10.7 21.1 0 26.8l-89.9 47.9c-7.9 4.2-17.5-1.5-17.5-10.5c0-2.8 1-5.5 2.8-7.6l36-43.2-36-43.2c-1.8-2.1-2.8-4.8-2.8-7.6c0-9 9.6-14.7 17.5-10.5zM396 141.1c0 2.8-1 5.5-2.8 7.6l-36 43.2 36 43.2c1.8 2.1 2.8 4.8 2.8 7.6c0 9-9.6 14.7-17.5 10.5l-89.9-47.9c-10.7-5.7-10.7-21.1 0-26.8l89.9-47.9c7.9-4.2 17.5 1.5 17.5 10.5z" />
                                    </svg>
                                    Cartoons
                                    <span class="text-gray-500 ml-auto">18 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="17" width="17" class='mr-2  '
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM48 368v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H416zM48 240v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H416zM48 112v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zM416 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H416zM160 128v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32zm32 160c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V320c0-17.7-14.3-32-32-32H192z" />
                                    </svg>
                                    Film
                                    <span class="text-gray-500 ml-auto">34 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" class='mr-1'
                                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z" />
                                    </svg>
                                    Games
                                    <span class="text-gray-500 ml-auto">9 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" class='mr-1'
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z" />
                                    </svg>
                                    Music
                                    <span class="text-gray-500 ml-auto">9 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" class='mr-1'
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M176 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64c-35.3 0-64 28.7-64 64H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64c0 35.3 28.7 64 64 64v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448c35.3 0 64-28.7 64-64h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V280h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V176h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448c0-35.3-28.7-64-64-64V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H280V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H176V24zM160 128H352c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32zm192 32H160V352H352V160z" />
                                    </svg>
                                    Technology
                                    <span class="text-gray-500 ml-auto">9 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- main ends here -->


            <!-- Halaman Tengah -->
            <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Berita Terkini</h1>
            <main class="mt-20">

                <section class="dark:bg-gray-800 dark:text-gray-100">
                    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                        <a rel="noopener noreferrer" href="#"
                            class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                            <img src="/../img/anthem.jpg" alt=""
                                class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                            <div class="p-6 space-y-2 lg:col-span-5">
                                <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                                    Noster
                                    tincidunt reprimique ad pro</h3>
                                <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                                <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos
                                    affert
                                    putent doctus id.</p>
                            </div>
                        </a>
                        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?1">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?2">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 22, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?3">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 23, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?4">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 24, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?5">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 25, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                                <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="https://source.unsplash.com/random/480x360?6">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                        laoreet
                                        repudiare legendos</h3>
                                    <span class="text-xs dark:text-gray-400">January 26, 2021</span>
                                    <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                        percipit
                                        perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei
                                        vocent
                                        delicata indoctum pri.</p>
                                </div>
                            </a>
                        </div>
                </section>

                <!-- component -->
                <div class="flex justify-center items-center">
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
                        <div role="main" class="flex flex-col items-center justify-center">
                            <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50"></h1>
                        </div>
                        <div class="lg:flex items-stretch md:mt-12 mt-8">
                            <div class="lg:w-1/2">
                                <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
                                    <div class="sm:w-1/2 relative">
                                        <div>
                                            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                                12
                                                Agustus 2002</p>
                                            <div class="absolute bottom-0 left-0 p-6">
                                                <h2 class="text-xl font-semibold 5 text-white">Artbook</h2>
                                                <p class="text-base leading-4 text-white mt-2">Rasakan kembali kekayaan
                                                    alam
                                                    Itomori</p>
                                                <a href="javascript:void(0)"
                                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                    <svg class="fill-stroke" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/../img/Hujan.jpg" alt="hujan" class="w-full" alt="chair" />
                                    </div>
                                    <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                                        <div>
                                            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                                12 April
                                                2021</p>
                                            <div class="absolute bottom-0 left-0 p-6">
                                                <h2 class="text-xl font-semibold 5 text-white">Suzume No Tojimari</h2>
                                                <p class="text-base leading-4 text-white mt-2">Perjalanan Suzume dimulai
                                                    dari
                                                    sebuah kota di Kyushu</p>
                                                <a href="javascript:void(0)"
                                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                    <svg class="fill-stroke" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/../img/Gempa.jpg" class="w-full" alt="gempa" class="w-full" />
                                    </div>
                                </div>
                                <div class="relative">
                                    <div>
                                        <p
                                            class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            12
                                            April 2021</p>
                                        <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Valorant</h2>
                                            <p class="text-base leading-4 text-white mt-2">7 Agent Terbaik Versi Team
                                                Secret</p>
                                            <a href="javascript:void(0)"
                                                class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                <svg class="fill-stroke" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/../img/valor.jpg" alt="sitting place"
                                        class="w-full md:mt-9 hidden sm:block" />
                                </div>
                            </div>
                            <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
                                <div class="relative">
                                    <div>
                                        <p
                                            class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            12
                                            April 2021</p>
                                        <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Artificial Intelligence</h2>
                                            <p class="text-base leading-4 text-white mt-2">Perkembangan AI dapat berdampak
                                                negatif
                                            </p>
                                            <a href="javascript:void(0)"
                                                class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                <svg class="fill-stroke" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/../img/AI.jpg" alt="sitting place" class="w-full sm:block hidden" />
                                    <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png"
                                        alt="sitting place" />
                                </div>
                                <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
                                    <div class="relative w-full">
                                        <div>
                                            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                                12 April
                                                2021</p>
                                            <div class="absolute bottom-0 left-0 p-6">
                                                <h2 class="text-xl font-semibold 5 text-white">Jujutsu Kaisen</h2>
                                                <p class="text-base leading-4 text-white mt-2">Pertarungan Gojo Satoru &
                                                    Toji
                                                    Fushiguro</p>
                                                <a href="javascript:void(0)"
                                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                    <svg class="fill-stroke" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/../img/jujutsu.jpg" class="w-full" alt="chair" />
                                    </div>
                                    <div class="relative w-full sm:mt-0 mt-4">
                                        <div>
                                            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                                12 April
                                                2021</p>
                                            <div class="absolute bottom-0 left-0 p-6">
                                                <h2 class="text-xl font-semibold 5 text-white">Anthem</h2>
                                                <p class="text-base leading-4 text-white mt-2">Anthem mengambil setting di
                                                    sebuah
                                                    dunia misterius</p>
                                                <a href="javascript:void(0)"
                                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                                    <svg class="fill-stroke" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/../img/anthem.jpg" class="w-full" alt="wall design" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
