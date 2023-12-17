<aside class="fixed inset-y-0 left-0 bg-abu max-h-screen w-60 shadow-xl">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="w-[125px] ml-12">
        <img src="/../img/GlamGroove.png" alt="">
        </div>
        <div class="p-5">
          <ul class="space-y-2">
            <li>
              <a href="/dashboard/posts" class="flex items-center bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4 {{ Request:: is ('dashboard/cposts') ? 'active' : ''}}">
                <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z"/>
                    <path d="M6 5H5v1h1V5Z"/>
                  </svg>
                Post
              </a>
            </li>
            <br>
            <hr class="w-25 h-[2px] mx-auto my-3 bg-for_card border-0 rounded md:my-10 dark:bg-gray-700 mt-4 shadow-lg">
            <li class="flex justify-center text-putih font-medium">Account</li>
            <br>
            <li class="mt-4">
              <a href="/dashboard/user" class="flex bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4">
                <svg class="w-4 h-4 text-black dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                  <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>  
                User
              </a>
            </li>
            <li>
              <a href="/dashboard/admin" class="flex bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4">
                <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm-1.391 7.361.707-3.535a3 3 0 0 1 .82-1.533L7.929 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h4.259a2.975 2.975 0 0 1-.15-1.639ZM8.05 17.95a1 1 0 0 1-.981-1.2l.708-3.536a1 1 0 0 1 .274-.511l6.363-6.364a3.007 3.007 0 0 1 4.243 0 3.007 3.007 0 0 1 0 4.243l-6.365 6.363a1 1 0 0 1-.511.274l-3.536.708a1.07 1.07 0 0 1-.195.023Z"/>
                </svg>
                Admin
              </a>
            </li>
          
          <br>
          <br>
          <br>
          <li>
            @if(isset($showButton) && $showButton)
            <li class="mt-2">
              <a href="/dashboard" class="flex items-center text-xs bg-putih text-gray-900 hover:text-white hover:bg-coklat rounded-md py-1 px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-3 h-3 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                  </svg>
                  Menu
              </a>
          </li>
          
        @endif
          </li>
        </div>
      </div>
    </div>
  </aside>