@extends('layouts.main')

@section('container')
    <!-- component -->

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
                <a href="post/{{ $item['shortUrl'] }}" target="_blank">Read more</a>
            </li>
            <hr><br>
        @endforeach
    </ul>
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
                    <div class="container px-5 py-24 mx-auto -mt-32">
                        <div class="flex flex-wrap -m-4">
                            {{--  --}}
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/720x400" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/721x401" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/722x402" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto -mt-36">
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/720x400" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/721x401" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/722x402" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto -mt-36">
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/720x400" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/721x401" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-md">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="https://dummyimage.com/722x402" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <!-- Jarak Setelah Popular News -->
    <main class="-mt-28"> </main>
@endsection
