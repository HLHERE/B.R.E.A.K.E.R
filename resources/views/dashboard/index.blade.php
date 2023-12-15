@extends('dashboard.layout.main')

@section('container')

<main class="flex ml-60 pt-36 overflow-auto text-navbar">
  <div class="flex px-6 py-16"> <!-- Menyesuaikan padding untuk memperbesar kartu -->
    <div class="flex max-w-4xl mx-auto space-x-4"> <!-- Menambahkan class 'space-x-4' untuk memberi jarak antar elemen -->
      <div class="w-[850px] h-[500px] bg-white/50 rounded-3xl p-8 mb-5 shadow-2xl relative"> <!-- Menyesuaikan padding kartu dan menambahkan class 'relative' -->
        <h1 class="text-4xl font-bold mb-10">Selamat datang di GlamGroove!</h1>
        <div class="flex items-center justify-between">
          <div class="flex items-stretch">
            <div class="text-2abu text-xs py-3">Admin<br>terhubung</div>
            <div class="h-100 border-l mx-4"></div>
            <div class="flex flex-nowrap -space-x-3">
              <div class="font-bold text-2xl text-abu leading-none">Hallo , <br>admin</div>
            </div>
          </div>
        </div>
        <hr class="w-25 h-[2px] mx-auto my-3 bg-navbar border-0 rounded md:my-10 dark:bg-gray-700 mt-4 shadow-lg">

        
        

        
        <!-- Menggunakan 'ml-auto' dan 'space-x-3' untuk membuat jarak spasi -->
        <div class="flex space-x-3 m-5">
          <a href="#" class="flex flex-col items-center bg-putih border border-white rounded-lg shadow md:flex-row md:max-w-md hover:bg-white dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-40 md:h-auto md:w-20 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-start p-5 ">
              <h5 class="mb-1 text-lg font-Arial tracking-tight text-navbar dark:text-white">Mari Post Artikel !</h5>
              <p class="mb-1 text-sm font-normal text-abu dark:text-gray-400">Klik di sini untuk memposting artikelmu. Kami menantikan kontribusimu!</p>
            </div>
          </a>
          <!-- Menggunakan 'ml-auto' untuk memindahkan card "User" ke kanan -->
          <div class="h-44 w-32 bg-putih first-letter:rounded-xl flex flex-col justify-center items-center shadow duration-300 hover:bg-white hover:shadow-xl ml-auto">
            <svg class="w-6 h-6 text-navbar dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
              <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
            </svg>            
            <span class="mt-6 text-sm leading-5 font-Arial">User</span>
            <span class="mt-6 text-sm leading-5 font-Arial">21</span>
          </div>
          
          <!-- Menggunakan 'ml-auto' untuk memindahkan card "Admin" ke kanan -->
          <div class="h-44 w-32 bg-putih first-letter:rounded-xl flex flex-col justify-center items-center shadow duration-300 hover:bg-white hover:shadow-xl ml-auto">
            <svg class="w-6 h-6 text-navbar dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm-1.391 7.361.707-3.535a3 3 0 0 1 .82-1.533L7.929 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h4.259a2.975 2.975 0 0 1-.15-1.639ZM8.05 17.95a1 1 0 0 1-.981-1.2l.708-3.536a1 1 0 0 1 .274-.511l6.363-6.364a3.007 3.007 0 0 1 4.243 0 3.007 3.007 0 0 1 0 4.243l-6.365 6.363a1 1 0 0 1-.511.274l-3.536.708a1.07 1.07 0 0 1-.195.023Z"/>
            </svg>            
            <span class="mt-6 text-sm leading-5 font-Arial">Admin</span>
            <span class="mt-6 text-sm leading-5 font-Arial">5</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
