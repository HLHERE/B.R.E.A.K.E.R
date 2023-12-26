<aside class="fixed inset-y-0 left-0 bg-abu w-60 md:w-1/4 lg:w-1/5 xl:w-1/6 shadow-xl overflow-y-auto">
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
            <br>
            <br>
            <br>
            <li>
            @if(isset($showButton) && $showButton)
            <li class="mt-2">
              <a href="/dashboard/" class="flex bg-putih hover:bg-coklat rounded-xl font-bold text-sm text-gray-900 hover:text-putih py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" id="back"><path d="M9,20a1,1,0,0,1-.71-.29l-4-4a1,1,0,0,1,0-1.41l4-4a1,1,0,0,1,1.41,1.41L6.41,15l3.29,3.29A1,1,0,0,1,9,20Z"></path><path d="M17,16H5a1,1,0,0,1,0-2H17a1,1,0,0,0,1-1V7a1,1,0,0,0-1-1H7A1,1,0,0,1,7,4H17a3,3,0,0,1,3,3v6A3,3,0,0,1,17,16Z"></path></svg>
                  Menu
              </a>
          </li>
            @endif
          </li>
        </div>
      </div>
    </div>
  </aside>