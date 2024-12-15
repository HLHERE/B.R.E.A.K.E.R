@extends('dashboard.layout.main')

@section('container')
    <main class="flex ml-40 pt-14 overflow-auto text-navbar">
        <div class="flex px-6 py-16">
            <div class="flex max-w-4xl mx-auto space-x-4">
                <div class="w-[850px] h-[500px] bg-white/50 rounded-3xl p-8 mb-5 shadow-md relative">
                    <h1 class="text-4xl font-bold mb-10">Selamat datang di GlamGroove!</h1>
                    <div class="flex items-center justify-between">
                        <div class="flex items-stretch">
                            <div class="text-2abu text-xs py-3">Admin<br>terhubung</div>
                            <div class="h-100 border-l mx-4"></div>
                            <div class="flex flex-nowrap -space-x-3">

                                <div class="font-bold text-2xl text-abu leading-none">Hallo, <br> {{ auth()->user()->name }}
                                </div>


                            </div>
                        </div>
                    </div>
                    <hr
                        class="w-25 h-[2px] mx-auto my-3 bg-navbar border-0 rounded md:my-10 dark:bg-gray-700 mt-4 shadow-lg">

                    <div class="flex space-x-3 m-5">
                        <a href="/dashboard/posts/create/"
                            class="flex flex-col items-center bg-putih border border-white rounded-lg shadow md:flex-row md:max-w-md hover:bg-white dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-40 md:h-auto md:w-20 md:rounded-none md:rounded-s-lg"
                                src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-start p-5 ">
                                <h5 class="mb-1 text-lg font-Arial tracking-tight text-navbar dark:text-white">Mari Post
                                    Artikel !</h5>
                                <p class="mb-1 text-sm font-normal text-abu dark:text-gray-400">Klik di sini untuk
                                    memposting artikelmu. Kami menantikan kontribusimu!</p>
                            </div>
                        </a>
                        <div class="text-center">
                            <div
                                class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-navbar sm:w-12 sm:h-12">
                                <svg class="w-6 h-6 text-putih dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                </svg>
                            </div>
                            <h6 class="text-lg font-bold text-deep-purple-accent-400">{{ $totaluser }}</h6>
                            <p class=" font-bold text-md">Users</p>
                            <p class="text-gray-700 text-sm">
                                Welcome back! Tens of thousands of users have logged into GlamGroove, making it a bustling
                                hub for news and updates </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
