@extends('layouts.main')

@section('container')
    <!-- component -->
    <div class="max-w-screen-lg mx-auto">
        {{-- Hidden Request, query category by search --}}
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
        </form>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto -mt-14">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-5xl text-2xl font-normal font-Arial title-font mb-2 text-abu">
                            {{ $judul }}</h1>
                        <div class="h-1 w-20 bg-coklat_muda rounded"></div>
                    </div>
                </div>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto -mt-36">
                        <div class="flex flex-wrap -m-4">
                            @foreach ($posts as $item)
                                <a class="p-4 md:w-1/3"
                                    href="{{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? $item['shortUrl'] : url('post', $item['shortUrl']) }}"
                                    {{ filter_var($item['shortUrl'], FILTER_VALIDATE_URL) ? " target = '_blank'" : '' }}>
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                        @if (!empty($item['authorImage']))
                                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                                src="{{ $item['thumbnail'] }}" alt="{{ $item['webTitle'] }}">
                                        @endif
                                        <div class="p-6">
                                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                {{ $item['cartegory'] }}</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                                {{ $item['webTitle'] }}</h1>
                                            <p class="leading-relaxed mb-3">{!! $item['body'] !!}</p>
                                            <div class="flex items-center flex-wrap ">
                                                <span
                                                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                        viewBox="0 0 24 24">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>{{ $item['publication'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="flex justify-center mt-8">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <!-- Jarak Setelah Popular News -->
    <main class="-mt-28"> </main>
@endsection
