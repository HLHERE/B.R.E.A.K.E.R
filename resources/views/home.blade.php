@extends('layouts.main')

@section('container')

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">GlamGroove Entertainment</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">GlamGroove merupakan website Entertainment yang menampilkan hot news & news tentang Technology, Game, Anime adapun juga Self Development tentang Education & Job.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/AI.jpg" alt="content">
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Artificial Intelligence</h2>
          <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/Hujan.jpg" alt="content">
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Artbook</h2>
          <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/valor.jpg" alt="content">
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Valorant</h2>
          <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="/../img/gempa.jpg" alt="content">
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Suzume No Tojimari</h2>
          <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Berita Terbaru Terkini</h1>
<!-- component -->
<div class="flex justify-center items-center">
  <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
  <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
    <div role="main" class="flex flex-col items-center justify-center">
      <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50"></h1>
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
          <img src="/../img/valor.jpg" alt="sitting place" class="w-full md:mt-9 hidden sm:block" />
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

<section class="dark:bg-gray-800 dark:text-gray-100">
	<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
		<a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
			<img src="/../img/anthem.jpg" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
				<span class="text-xs dark:text-gray-400">February 19, 2021</span>
				<p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
			</div>
		</a>
		<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 21, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?2">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 22, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?3">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 23, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?4">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 24, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?5">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 25, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
      <img src="/../img/anthem.jpg" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?6">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs dark:text-gray-400">January 26, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
		</div>
</section>
@endsection