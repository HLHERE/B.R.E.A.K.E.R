@extends('dashboard.layout.main')

@section('container')
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="relative top-[125px] w-[900px]"
        enctype="multipart/form-data">
        @method('put')
        @csrf
        <h1 class="font-Arial text-2xl mb-4 text-navbar">Edit Form</h1>
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700
   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar @error('title', $post->title) is-invalid @enderror "
                value="{{ old('title', $post->title) }}" required>
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Slug</label>
            <input type="text" id="slug" name="slug" readonly
                class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
  dark:text-white dark:focus:ring-navbar dark:focus:border-navbar readonly:pointer-events-none @error('slug') is-invalid @enderror"
                required value="{{ old('slug', $post->slug) }}">

            @error('slug')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select id="category" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="postImg">Upload file</label>
            <input type="hidden" name="oldImage" value="{{ $post->postImg }}">
            @if ($post->postImg)
                <img src="{{ asset('storage/' . $post->postImg) }}" class="previewImg w-40 h-auto mb-5">
            @else
                <img class="previewImg w-40 h-auto mb-5">
            @endif
            <input id="postImg" name="postImg" onchange="previewImage()"
                class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                800x400px).</p>
            @error('postImg')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog</label>
            <input type="hidden" name="body" id="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit"
            class="mt-4 mb-5 text-putih bg-navbar hover:bg-orange_muda focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange_muda dark:hover:bg-navbar dark:focus:ring-white">Edit
            Post!</button>

        <script>
            const title = document.querySelector('#title'); // Fix typo: "queySelector" should be "querySelector"
            const slug = document.querySelector('#slug'); // Fix typo: "queySelector" should be "querySelector"
            title.addEventListener('change', function() {
                fetch('/dashboard/posts/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug);
            });

            function previewImage() {
                const image = document.querySelector('#postImg');
                const imgPreview = document.querySelector('.previewImg');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
            }
        </script>
    @endsection
