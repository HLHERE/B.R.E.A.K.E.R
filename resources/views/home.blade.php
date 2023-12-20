@extends('layouts.main')

@section('container')
    {{-- API Data --}}

    <ul>
        <h1>Random News</h1>
        @foreach ($randomContent as $item)
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
        <h1>Everyting about {{ $cartegoryName }}</h1>
        @foreach ($categoryContent as $item)
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

    {{-- Akhir API --}}

    <!-- Halaman Atas -->
    <!-- component -->
    {{-- Contoh Menampilakan data berdasarkan yang sering di lihat --}}

    <!-- resources/views/posts/popular.blade.php -->
    {{-- <h1><b> =========== Popular Posts =========== </b></h1>
@foreach ($popular as $post)
    <hr>
    <h2><b>Judul: </b>{{ $post->title }}</h2>
    <p><b>Author: </b>{{ $post->author->name }}</p>
    <p><b>Excerpt: </b>{!! Str::limit($post->body, 30, 'Read More...') !!}</p>
    <p><b>Body: </b>{!! $post->body !!}</p>
    <p><b>Terakhir update: </b>{{ $post->created_at->diffForHumans() }}</p>
    <p><b>Banyak pengunjung: </b>Views: {{ $post->views }}</p>
    <hr>
@endforeach --}}

    {{-- End popular --}}

    {{-- Contoh Menampilakan data berdasarkan yang sering di lihat --}}

    <!-- resources/views/posts/popular.blade.php -->
    {{-- <h1><b> =========== Hot Posts =========== </b></h1>
@foreach ($posts as $post)
  <hr>
  <h2><b>Judul: </b>{{ $post->title }}</h2>
  <p><b>Author: </b>{{ $post->author->name }}</p>
  <p><b>Excerpt: </b>{!! Str::limit($post->body, 30, 'Read More...') !!}</p>
  <p><b>Body: </b>{!! $post->body !!}</p>
  <p><b>Terakhir update: </b>{{ $post->created_at->diffForHumans() }}</p>
  <p><b>Banyak pengunjung: </b>Views: {{ $post->views }}</p>
  <hr>
@endforeach --}}

    {{-- End popular --}}
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
                            {!! $posts[0]->title !!}
                        </h2>
                    </div>
                </a>

                <a class="w-full md:w-1/3 relative rounded" style="height: 24em;" href="#">
                    <div class="absolute left-0 top-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="/../img/teknologi.jpg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <h2 class="text-3xl font-semibold text-gray-100 leading-tight">{!! $posts[0]->title !!}</h2>
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
                                    {!! $posts[0]->title !!}
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
                                    {!! $posts[0]->title !!}
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

                <!-- right sidebar -->
                <div class="w-full lg:w-1/3 px-3">
                    <!-- topics -->
                    <div class="mb-4">
                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> Hot News </h5>
                        <ul>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                                    </svg>


    <!-- main ends here -->


    <!-- Halaman Tengah -->
    <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Berita Terbaru Terkini</h1>
    <main class="mt-20">

        <section class="dark:bg-gray-800 dark:text-gray-100">
            <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                <a rel="noopener noreferrer" href="#"
                    class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                    <img src="/../img/anthem.jpg" alt=""
                        class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                    <div class="p-6 space-y-2 lg:col-span-5">
                        <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster
                            tincidunt reprimique ad pro</h3>
                        <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                        <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert
                            putent doctus id.</p>
                    </div>
                </a>
                <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?1">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
                                delicata indoctum pri.</p>
                        </div>
                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?2">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 22, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
                                delicata indoctum pri.</p>
                        </div>
                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?3">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 23, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
                                delicata indoctum pri.</p>
                        </div>
                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?4">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 24, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
                                delicata indoctum pri.</p>
                        </div>
                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?5">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 25, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
                                delicata indoctum pri.</p>
                        </div>
                    </a>
                    <a rel="noopener noreferrer" href="#"
                        class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                        <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                            src="https://source.unsplash.com/random/480x360?6">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet
                                repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 26, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit
                                perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent
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
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12
                                        Agustus 2002</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Artbook</h2>
                                        <p class="text-base leading-4 text-white mt-2">Rasakan kembali kekayaan alam
                                            Itomori</p>
                                        <a href="javascript:void(0)"
                                            class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <img src="/../img/Hujan.jpg" alt="hujan" class="w-full" alt="chair" />
                            </div>
                            <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                                <div>
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                        2021</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Suzume No Tojimari</h2>
                                        <p class="text-base leading-4 text-white mt-2">Perjalanan Suzume dimulai dari
                                            sebuah kota di Kyushu</p>
                                        <a href="javascript:void(0)"
                                            class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <img src="/../img/Gempa.jpg" class="w-full" alt="gempa" class="w-full" />
                            </div>
                        </div>
                        <div class="relative">
                            <div>
                                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12
                                    April 2021</p>
                                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">Valorant</h2>
                                    <p class="text-base leading-4 text-white mt-2">7 Agent Terbaik Versi Team Secret</p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="/../img/valor.jpg" alt="sitting place" class="w-full md:mt-9 hidden sm:block" />
                        </div>
                    </div>
                    <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
                        <div class="relative">
                            <div>
                                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12
                                    April 2021</p>
                                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                    <h2 class="text-xl font-semibold 5 text-white">Artificial Intelligence</h2>
                                    <p class="text-base leading-4 text-white mt-2">Perkembangan AI dapat berdampak negatif
                                    </p>
                                    <a href="javascript:void(0)"
                                        class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
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
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                        2021</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Jujutsu Kaisen</h2>
                                        <p class="text-base leading-4 text-white mt-2">Pertarungan Gojo Satoru & Toji
                                            Fushiguro</p>
                                        <a href="javascript:void(0)"
                                            class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <img src="/../img/jujutsu.jpg" class="w-full" alt="chair" />
                            </div>
                            <div class="relative w-full sm:mt-0 mt-4">
                                <div>
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April
                                        2021</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Anthem</h2>
                                        <p class="text-base leading-4 text-white mt-2">Anthem mengambil setting di sebuah
                                            dunia misterius</p>
                                        <a href="javascript:void(0)"
                                            class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
