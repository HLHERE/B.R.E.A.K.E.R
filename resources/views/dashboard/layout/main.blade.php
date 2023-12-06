<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @include('dashboard.layout.header')
    <main class="ml-60 pt-16  overflow-auto text-putih ">
        <div class="px-6 py-8">
          <div class="max-w-4xl mx-auto">
            <div class="bg-navbar rounded-3xl p-8 mb-5">
              <h1 class="text-3xl font-bold mb-10">Admin GlamGroove</h1>
              <div class="flex items-center justify-between">
                <div class="flex items-stretch">
                  <div class="text-putih text-xs">Members<br>connected</div>
                  <div class="h-100 border-l mx-4"></div>
                  <div class="flex flex-nowrap -space-x-3">
                    <div class="h-9 w-9">
                      <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">
                    </div>
                    <div class="h-9 w-9">
                      <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">
                    </div>
                  </div>
                </div>
                <div class="flex items-center gap-x-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                    <svg class="w-6 h-6 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none" viewBox="0 0 20 14">
                        <path stroke="currentColor" stroke-width="2" d="M1 5h18M1 9h18m-9-4v8m-8 0h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1Z"/>
                      </svg>
                  </button>
                </div>
              </div>
    
              <hr class="my-10">
    
              <div class="grid grid-cols-2 gap-x-20">
                <div>
                  <h2 class="text-2xl font-bold mb-4">Admin </h2>
    
                  <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-2">
                      <div class="p-4 bg-abu rounded-xl">
                        <div class="font-bold text-xl text-putih leading-none">Good Day, <br>Kristin</div>
                        <div class="mt-5">
                          <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-putih text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                            Mulai Post!
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <h2 class="text-2xl font-bold mb-4">Your tasks today</h2>
    
                  <div class="space-y-4">
                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                      <div class="flex justify-between">
                        <div class="text-gray-400 text-xs">Number 10</div>
                        <div class="text-gray-400 text-xs">4h</div>
                      </div>
                      <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Blog and social posts</a>
                      <div class="text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        </svg>Deadline is today
                      </div>
                    </div>
                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                      <div class="flex justify-between">
                        <div class="text-gray-400 text-xs">Grace Aroma</div>
                        <div class="text-gray-400 text-xs">7d</div>
                      </div>
                      <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>
                      <div class="text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        </svg>New feedback
                      </div>
                    </div>
                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                      <div class="flex justify-between">
                        <div class="text-gray-400 text-xs">Petz App</div>
                        <div class="text-gray-400 text-xs">2h</div>
                      </div>
                      <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and browser QA</a>
                    </div>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    @include('dashboard.layout.sidebar')

    @yield('container')
</body>
</html>