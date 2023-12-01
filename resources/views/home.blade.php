@extends ('layouts.main')

@section('container')

<!-- component -->
<div class="flex justify-center items-center">
  <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
  <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
    <div role="main" class="flex flex-col items-center justify-center">
      <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Berita Terbaru Terkini</h1>
    </div>
    <div class="lg:flex items-stretch md:mt-12 mt-8">
      <div class="lg:w-1/2">
        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
          <div class="sm:w-1/2 relative">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 Agustus 2002</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">Artbook</h2>
                <p class="text-base leading-4 text-white mt-2">Rasakan kembali kekayaan alam Itomori</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="/../img/Hujan.jpg" alt="hujan" class="w-full" alt="chair" />
          </div>
          <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">Suzume No Tojimari</h2>
                <p class="text-base leading-4 text-white mt-2">Perjalanan Suzume dimulai dari sebuah kota di Kyushu</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="/../img/Gempa.jpg" class="w-full" alt="gempa" class="w-full" />
          </div>
        </div>
        <div class="relative">
          <div>
            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
            <div class="absolute bottom-0 left-0 md:p-10 p-6">
              <h2 class="text-xl font-semibold 5 text-white">Valorant</h2>
              <p class="text-base leading-4 text-white mt-2">7 Agent Terbaik Versi Team Secret</p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
          <img src="/../img/valor.jpg" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
          <img class="w-full mt-4 sm:hidden" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png" alt="sitting place" />
        </div>
      </div>
      <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
        <div class="relative">
          <div>
            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
            <div class="absolute bottom-0 left-0 md:p-10 p-6">
              <h2 class="text-xl font-semibold 5 text-white">Artificial Intelligence</h2>
              <p class="text-base leading-4 text-white mt-2">Perkembangan AI dapat berdampak negatif</p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
          <img src="/../img/AI.jpg" alt="sitting place" class="w-full sm:block hidden" />
          <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
        </div>
        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
          <div class="relative w-full">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">Jujutsu Kaisen</h2>
                <p class="text-base leading-4 text-white mt-2">Pertarungan Gojo Satoru & Toji Fushiguro</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="/../img/jujutsu.jpg" class="w-full" alt="chair" />
          </div>
          <div class="relative w-full sm:mt-0 mt-4">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">Anthem</h2>
                <p class="text-base leading-4 text-white mt-2">Anthem mengambil setting di sebuah dunia misterius</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>Contact Us</title>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto my-10 p-8 max-w-md">
    <h1 class="text-2xl font-bold mb-6">Contact Us</h1>
    <form action="#" method="post">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
        <input type="text" id="name" name="name" class="w-full p-2 border rounded">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Your Email</label>
        <input type="email" id="email" name="email" class="w-full p-2 border rounded">
      </div>
      <div class="mb-6">
        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Your Message</label>
        <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded"></textarea>
      </div>
      <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Submit</button>
    </form>
  </div>
</body>
</html>

@endsection