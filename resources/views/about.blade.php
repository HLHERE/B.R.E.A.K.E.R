@extends('layouts.main')

@section('container')
<!-- Komponen -->
<main class="-mt-12">
<div class="max-w-screen-lg mx-auto">
  <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-abu">About Us</h1>
      </div>
    </div>
</main>

<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->
<main class="-mt-52">
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
<!-- Snippet -->   
<main class="-mt-">     
<section class="flex flex-col justify-center antialiased bg-putih text-gray-200 min-h-screen">
    <div class="max-w-6xl mx-auto p-4 sm:px-6 h-full">
        <!-- Blog post -->
        <article class="max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
            <a class="relative block group">
                <div class="absolute inset-0 bg-abu hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none" aria-hidden="true"></div>
                <figure class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                    <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="/../img/GlamGroove.png" alt="Blog post">
                </figure>
            </a>
            <div>
                <header>
                    <h3 class="lg:text-3xl font-bold leading-tight mb-5 -mt-auto">
                        <a class="text-navbar transition duration-150 ease-in-out">GlamGroove Entertainment.</a>
                    </h3>
                </header>
                <p class="text-lg text-abu flex-grow">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupx.</p>
            </div>
        </article>    
    </div>
</section>

<!-- Created By -->
<div class="-mt-6 text-center">
    <h2 class="text-3xl text-abu font-bold">Created By</h2>
</div>

<!-- Content -->
<section class="text-gray-600 body-font">
<div class="mt-1 text-center">
  <div class="container px-16 py-16 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/gojo.jpg" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Front End & Back End</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Mochamad Haykal Alvegio Hadian</h2>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/gojo.jpg" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Front End</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Mohammad Deandra Adhitya</h2>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/gojo.jpg" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Back End</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Muhammad Ridho Fauzan</h2>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/gojo.jpg" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Back End</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Syahidan Fitrah</h2>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection