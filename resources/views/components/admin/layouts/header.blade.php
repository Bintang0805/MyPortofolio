<!-- Header -->
<div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
    <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-primary border-none">
      <span class="hidden md:block text-lg font-bold">My Portofolio</span>
    </div>
    <div class="flex justify-end items-center h-14 bg-primary header-right pr-3">
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <i class="fas fa-user flex flex-row items-center w-auto px-3 py-3 mt-2 text-base text-left bg-white text-black rounded-full md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 focus:bg-gray-200" @click="open = !open"></i>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-40 mt-2 origin-top-right rounded-md shadow-lg md:w-48 text-black">
            <div class="px-2 py-2 w-auto bg-white rounded-md shadow">
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:bg-gray-200" href="#"><i class="fas fa-sign-out-alt pr-2"></i> Logout</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- ./Header -->
