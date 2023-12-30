@extends('layouts.main')

@section('container')
    <!-- component -->
    <div class="max-w-screen-lg mx-auto">

        <!-- component -->
        <div class="max-w-screen-lg mx-auto">
            <main class="mt-16 mb-10">
                <section class="relative shadow-md rounded-lg bg-cover bg-center bg-no-repeat">
                    <div
                        class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
                    </div>

                    @if ($post->postImg)
                        <img src="{{ asset('storage/' . $post->postImg) }}" class="w-full object-cover lg:rounded"
                            style="height: 28em;" />
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="w-full object-cover lg:rounded" style="height: 28em;" />
                    @endif
                </section>

                <div class="flex flex-col lg:flex-row lg:space-x-12">

                    <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">

                        <br>
                        {!! $post->body !!}
                        <br><br>
                    </div>

                    <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm shadow-xl">
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
        <div class="flex flex-col md:flex-no-wrap space-x-0 md:space-x-6 mb-12 ">
            <!-- main post -->
            <div class="mb-4 lg:mb-0 p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                @if ($post->postImg)
                    <img src="{{ asset('storage/' . $post->postImg) }}" class="w-full object-cover lg:rounded"
                        style="height: 28em;" />
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="w-full object-cover lg:rounded" style="height: 28em;" />
                @endif

                <span class="text-navbar text-sm hidden md:block mt-4"> {{ $post->category->name }} </span>
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    {{ $post->title }}
                </h1>
                <p class="text-gray-600 mb-4">
                    {!! \Illuminate\Support\Str::limit(strip_tags($post['body']), 300) !!}
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
                        <img
                            src="{{ filter_var($item['thumbnail'], FILTER_VALIDATE_URL) ? $item['thumbnail'] : asset('storage/' . $item['thumbnail']) }}" />
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
