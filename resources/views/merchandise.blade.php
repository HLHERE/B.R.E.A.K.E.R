@extends('layouts.main')

@section('container')

<div class="max-w-screen-xl mx-auto ">
<section class="text-abu body-font mt-3  ">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-abu text-">Merchandises</h1>
          <div class="h-1 w-20 bg-coklat rounded"></div>
        </div>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
  </section>

  

{{-- ini card pembelian  --}}

<div class="flex px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-20 mb-20">
    <div class="grid max-w-md gap- row-gap-8 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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

      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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

      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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


      <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow mb-4">
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


@endsection