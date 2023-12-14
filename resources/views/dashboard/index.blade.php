@extends('dashboard.layout.main')

@section('container')


<main class="ml-60 pt-36  overflow-auto text-putih ">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-navbar rounded-3xl p-8 mb-5">
          <h1 class="text-3xl font-bold mb-10">Selamat datang di GlamGroove!</h1>
          <div class="flex items-center justify-between">
            <div class="flex items-stretch">
              <div class="text-putih text-xs">Admin<br>terhubung</div>
              <div class="h-100 border-l mx-4"></div>
              <div class="flex flex-nowrap -space-x-3">
                <div class="font-bold text-xl text-putih leading-none">Hallo , <br>admin
                </div>
              </div>
            </div>
            {{-- ini buat button buat ke arah post --}}
            <div class="flex items-center gap-x-2">
              <button type="button" class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-abu text-gray-300 hover:text-putih hover:bg-coklat text-sm font-semibold transition">
                <svg class="w-6 h-6 text-putih dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-width="2" d="M1 5h18M1 9h18m-9-4v8m-8 0h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1Z"/>
                  </svg>
              </button>
            </div>
          </div>

          <hr class="my-10">

          <div class="grid grid-cols-2 gap-x-20">
            <div>
              <div class="grid grid-cols-2 gap-3">
                <div class="col-span-2">
                  <div class="p-4 bg-abu rounded-xl">
                    {{-- ini buat nama si admin pake {{nama}} --}}
                    <div class="font-bold text-xl text-putih leading-none">Mari unggah <br> sebuah artikel</div>
                    <div class="mt-5">
                      {{-- button buat post arahin nya ke tambah data post --}}
                      <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-putih text-gray-800 hover:text-coklat text-sm font-semibold transition">
                        Mulai Unggah !
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="grid grid-cols-2 gap-3">
                <div class="col-span-2">
                  <div class="p-4 bg-abu rounded-xl">
                    {{-- ini buat nama si admin pake {{nama}} --}}
                    <div class="font-bold text-xl text-putih leading-none">Mari unggah <br> merchandise</div>
                    <div class="mt-5">
                      {{-- button buat post arahin nya ke tambah post merch --}}
                      <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-putih text-gray-800 hover:text-coklat text-sm font-semibold transition">
                        Mulai Unggah!
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection
