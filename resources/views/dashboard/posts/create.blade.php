@extends('dashboard.layout.main')

@section('container')

<form method="post" action="/dashboard/posts" class="relative top-[125px] w-[900px] ">
  @csrf
  <h1 class="font-Arial text-2xl mb-4 text-navbar">Create Form</h1>
  <div class="mb-5">
  <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
  <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar" required>
</div>

  <div class="mb-5">
    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Slug</label>
    <input type="text" id="slug" name="slug" readonly disabled
           class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar readonly:pointer-events-none">
    
    <div class="mb-5">
      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
      <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-navbar focus:border-navbar block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar">
        @foreach ( $categories as $category )
        <option value="{{$category->id}}"></option>
        @endforeach
    </select>
</div>
  
    <div class="mb-5">
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog</label>
      <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-navbar focus:border-navbar dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-navbar dark:focus:border-navbar" placeholder="Type your blog here...."></textarea>
    </div>
    <button type="submit" class="text-putih bg-navbar hover:bg-orange_muda focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange_muda dark:hover:bg-navbar dark:focus:ring-white">Create Blog!</button>  </form>
  
    <script>
      const title = document.querySelector('#title');  // Fix typo: "queySelector" should be "querySelector"
      const slug = document.querySelector('#slug');    // Fix typo: "queySelector" should be "querySelector"
      title.addEventListener('change', function () {
          fetch('/dashboard/posts/checkSlug?title=' + title.value)
              .then(response => response.json())
              .then(data => slug.value = data.slug);
      });
  </script>

@endsection