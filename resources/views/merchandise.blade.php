@extends('layouts.main')

@section('container')

<div class="max-w-screen-xl mx-auto ">
<section class="text-abu body-font mt-3  ">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-abu text-">Hot News</h1>
          <div class="h-1 w-20 bg-coklat rounded"></div>
        </div>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
  </section>

  <header class="max-w-6xl mx-auto py-8 px-5 flex justify-between lg:px-8">
    <a href="#/" class="text-2xl text-gray-900 font-semibold">price<span class="text-indigo-600">ly</span></a>
    <nav class="">
      <ul class="flex pt-1.5 text-md lg:pt-0 lg:text-lg">
        <li class="lg:px-4">
          <a href="#/" class="p-3 text-gray-500 font-semibold">about</a>
        </li>
        <li class="lg:px-4">
          <a href="#/" class="p-3 text-gray-500 font-semibold">blog</a>
        </li>
        <li class="lg:pl-4">
          <a href="#/" class="p-3 text-gray-500 font-semibold">contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="max-w-6xl mx-auto pt-10 pb-36 px-8">
    
    <div class="max-w-md mx-auto mb-14 text-center">
      <h1 class="text-4xl font-semibold mb-6 lg:text-5xl"><span class="text-indigo-600">Flexible</span> Plans</h1>
      <p class="text-xl text-gray-500 font-medium">Choose a plan that works best for you and your team.</p>
    </div>
    
    <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">
      
      <div class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-2xl font-semibold">Basic</span>
            <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">10 </span></span><span class="text-gray-500 font-medium">/ user</span>
          </div>
        </div>
        <ul class="mb-7 font-medium text-gray-500">
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Get started with <span class="text-black">messaging</span></span>
          </li>
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Flexible <span class="text-black">team meetings</span></span>
          </li>
          <li class="flex text-lg">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3"><span class="text-black">5 TB</span> cloud storage</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
          Choose Plan
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
      
      <div class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
        <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-3xl font-semibold text-white">Startup</span>
            <span><span class="font-medium text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold text-white">24 </span></span><span class="font-medium">/ user</span>
          </div>
        </div>
        <ul class="mb-10 font-medium text-xl">
          <li class="flex mb-6">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3">All features in <span class="text-white">Basic</span></span>
          </li>
          <li class="flex mb-6">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3">Flexible <span class="text-white">call scheduling</span></span>
          </li>
          <li class="flex">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3"><span class="text-white">15 TB</span> cloud storage</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-6 px-4 text-center text-white text-2xl">
          Choose Plan
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
      
      <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-2xl font-semibold">Enterprise</span>
            <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">35 </span></span><span class="text-gray-500 font-medium">/ user</span>
          </div>
        </div>
        <ul class="mb-7 font-medium text-gray-500">
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">All features in <span class="text-black">Startup</span></span>
          </li>
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Growth <span class="text-black">oriented</span></span>
          </li>
          <li class="flex text-lg">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3"><span class="text-black">Unlimited</span> cloud storage</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
          Choose Plan
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
      
    </div>
    
  </main>






  
{{-- ini card pembelian  --}}
<div class="container">
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 mb-20">
    <div class="grid max-w-md gap-10 row-gap-8 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3184305/pexels-photo-3184305.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Basic</div>
            <p class="text-sm text-gray-900">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$12</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Basic
          </a>
        </div>
      </div>


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3183181/pexels-photo-3183181.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Advanced</div>
            <p class="text-sm text-gray-900">
              A flower in my garden, a mystery in my panties. Heart attack never was so close.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$38</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Advanced
          </a>
        </div>
      </div>


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Pro</div>
            <p class="text-sm text-gray-900">
              We never had the chance to. Maybe it was the eleven months he spent in the womb.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$78</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Pro
          </a>
        </div>
      </div>

      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Pro</div>
            <p class="text-sm text-gray-900">
              We never had the chance to. Maybe it was the eleven months he spent in the womb.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$78</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Pro
          </a>
        </div>
      </div>

      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Pro</div>
            <p class="text-sm text-gray-900">
              We never had the chance to. Maybe it was the eleven months he spent in the womb.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$78</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Pro
          </a>
        </div>
      </div>


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
        <div class="relative w-full h-48">
          <img src="https://images.pexels.com/photos/3182743/pexels-photo-3182743.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full rounded-t" alt="Plan" />
        </div>
        <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
          <div>
            <div class="text-lg font-semibold">Pro</div>
            <p class="text-sm text-gray-900">
              We never had the chance to. Maybe it was the eleven months he spent in the womb.
            </p>
            <div class="mt-1 mb-4 mr-1 text-4xl font-bold sm:text-5xl">$78</div>
          </div>
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Buy Pro
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection