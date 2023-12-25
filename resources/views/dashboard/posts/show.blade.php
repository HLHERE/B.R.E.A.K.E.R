@extends('dashboard.layout.main')

@section('container')

<div class="max-w-screen-lg mb-7 ml-10">
    <main class="mt-24">
        <main class="mt-10">
          <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
              <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                {{$post->title}}
              </h2>
              <a 
                href="#"
                class="py-2 text-navbar inline-flex items-center justify-center mb-2 font-Arial">
                {{$post->category->name}}
              </a>
            </div>
            @if ($post->postImg)
            <img src="{{asset('storage/' . $post->postImg)}}" class="w-full object-cover lg:rounded" style="height: 28em;"/>

            @else
              
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
            @endif


          </div>
    
          <div class="flex flex-col lg:flex-row lg:space-x-12">
    
            <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
              <p class="pb-6">{{$post->body}}</p>
    
            </div>
    
            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm bg-coklat shadow-lg md:rounded-xl">
              <div class="p-4 border-t border-b md:border md:rounded">
                <div class="flex py-2">
                  <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-putih text-sm">{{$post->author->name}} </p>
                    <p class="font-semibold text-putih text-xs"> {{$post->author->username}} </p>
                  </div>
                </div>
              </div>
            </div>
    
          </div>

          
        </main>
        




@endsection
