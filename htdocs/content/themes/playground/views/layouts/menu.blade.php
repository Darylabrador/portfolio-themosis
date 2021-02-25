<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button id="buttonBurger" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <svg id="closeMenuIcon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="openMenuIcon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('home') }}" style="margin-right: 15px; color: white;" class="flex align-center"> 
            <span class="iconify h-8 w-auto" data-inline="false" data-icon="ion:home" style="color: rgb(255, 255, 255); font-size: 30px;"></span> 
          </a>
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="ml-3 relative">
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <a href="{{ route('quisuisje') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">A propos de moi</a>
                    <a href="/formations" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Mon parcours</a>
                    <a href="/realisations" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Mes réalisations</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Me contacter</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hidden z-50 bg-gray-800 absolute" id="mobile-menu" style="width: 100%;">
    <div class="px-2 pt-2 pb-3 space-y-1 flex flex-col">
      <a href="{{ route('quisuisje') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">A propos de moi</a>
      <a href="/formations" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Mon parcours</a>
      <a href="/realisations" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Mes réalisations</a>
      <a href="{{ route('contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white visited:text-white focus:text-white px-3 py-2 rounded-md text-sm font-medium ">Me contacter</a>
    </div>
  </div>
</nav>