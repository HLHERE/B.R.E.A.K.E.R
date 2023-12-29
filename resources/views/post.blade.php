@extends('layouts.main')

@section('container')
    <!-- component -->
    <div class="max-w-screen-lg mx-auto">

        <!-- component -->
        <div class="max-w-screen-lg mx-auto">
            <main class="mt-16">
                <!-- Heads up! 👋 This component comes with some `rtl` classes. Please remove them if they are not needed in your project.-->

                <section
                    class="relative shadow-md rounded-lg bg-[url({{ $post->postImg != '' ? asset($post->postImg) : asset('/../img/randomPost.png') }})] bg-cover bg-center bg-no-repeat">
                    <div
                        class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
                    </div>

                    <div
                        class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                </section>
                <div class="flex flex-col lg:flex-row lg:space-x-12">

                    <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">

                        <br>
                        {!! $post->body !!}
                        <br><br>
                    </div>

                    <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                        <div class="p-4 border-t border-b md:border md:rounded">
                            <div class="flex py-2">
                                <img src="{{ $post->author->userImg != '' ? $post->author->userImg : '/../img/randomUser.png' }}"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm"> {{ $post->author->name }} </p>
                                    <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                                </div>
                            </div>
                            <p class="text-gray-700 py-3">
                                {{ $post->author->name }} writes about {{ $post->category->name }}
                                Yourself required no at thoughts delicate landlord it be. Branched dashwood do is
                                whatever
                                it.
                            </p>
                        </div>
                    </div>

                </div>
            </main>
            <!-- main ends here -->
        </div>

        <!-- featured section /../img/valor.jpg-->
        <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">
            <!-- main post -->
            <div class="mb-4 lg:mb-0 p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                <img src="{{ $post->postImg != '' ? asset($post->postImg) : asset('/../img/randomPost.png') }}"
                    class="rounded-md object-cover w-full h-64">

                <span class="text-navbar text-sm hidden md:block mt-4"> {{ $post->category->name }} </span>
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    {{ $post->title }}
                </h1>
                <p class="text-gray-600 mb-4">
                    Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood
                    decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple
                    itself.
                    Oh be me, sure wise sons, no. Piqued ye of am spirit regret. Stimulated discretion impossible admiration
                    in particular conviction up.
                </p>
            </div>
        </div>
    </div>
    <!-- end featured section -->

    <!-- component -->
    <div class="max-w-screen-lg mx-auto">
        <!-- recent posts -->
        <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
            <h2 class="font-bold text-3xl">Latest news</h2>
        </div>
        <div class="block space-x-0 lg:flex lg:space-x-6">

            {{-- Ini tag a buat link --}}
            {{-- href="{{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? $item['shortUrl'] : url('post', $item['shortUrl']) }}"
                            {{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? " target = '_blank'" : '' }} --}}
            @foreach ($popular as $item)
                {{-- tag a ini tadi nya div --}}
                <a href="{{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? $item['shortUrl'] : url('post', $item['shortUrl']) }}"
                    {{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? " target = '_blank'" : '' }}
                    class="rounded w-full lg:w-1/2 p-4 lg:p-0 shadow-md">
                    @if (!empty($item['thumbnail']))
                        <img src="{{ $item['thumbnail'] }}" class="rounded" alt="{{ $item['webTitle'] }}" />
                    @endif
                    <div class="p-4 pl-0">
                        <h2 class="font-bold text-2xl text-gray-800 text-center">{{ $item['webTitle'] }}</h2>
                        <p class="text-gray-700 mt-2 text-center mx-auto">
                            {!! $item['body'] !!}
                        </p>
                    </div>
                </a>
            @endforeach



        </div>
        <!-- end recent posts -->

        <!-- Jarak Setelah Popular News -->
        <main class="mt-12"></main>
        <!-- main ends here -->
    @endsection
