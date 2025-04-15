<x-layout>
  <div class="w-full">
  <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
            <img src = "/images/logo.svg" class="size-8" alt="Logo">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page"><x-heroicon-s-queue-list class="w-5 h-5 float-left mr-1"/>List</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"><x-heroicon-s-chart-bar class="w-5 h-5 float-left mr-1"/>Stats</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden cursor-pointer hover:bg-gray-700 rounded-full">
                <x-heroicon-o-plus-circle class="w-6 h-6 text-white-500"/>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="h-full">

    <main>
      <div class="mx-auto max-w-7xl min-w-4xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="sm:px-6 w-full">
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800"><x-heroicon-s-queue-list class="w-8 h-8 float-left mr-2"/>List</p>
                    <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                        <p>Sort By:</p>
                        <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                            <option class="text-sm text-indigo-800">Latest</option>
                            <option class="text-sm text-indigo-800">Oldest</option>
                            <option class="text-sm text-indigo-800">Latest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                      <thead>
                        <tr>
                          <th scope="col" class="text-gray-800 text-bold pb-4"><x-heroicon-o-check-circle class="w-5 h-5 ml-6"/></th>
                          <th scope="col" class="text-gray-800 text-bold pb-4"></th>
                          <th scope="col" class="text-gray-800 text-bold pb-4"><x-heroicon-o-banknotes class="w-5 h-5 ml-6"/></th>
                          <th scope="col" class="text-gray-800 text-bold pb-4"><x-heroicon-o-building-storefront class="w-5 h-5 ml-6"/></th>
                          <th scope="col" class="text-gray-800 text-bold pb-4"></th>
                        </tr>
                      </thead>
                        <tbody>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                            <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex flex-col items-left pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 block pb-1">Pasta</p>
                                        <span class="text-sm font-sm leading-none text-gray-400 block">Groceries</span>
                                    </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <img src="/images/shops/Dischem.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none  h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                          <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td  class="focus:text-indigo-600 ">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Rocketnet</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Entertainment</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Dischem.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none focus:text-indigo-600 h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Bread</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Groceries</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Checkers.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Game Pass</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Entertainment</span>
                                  </div>
                                </td>
                                
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Checkers.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-red-300 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-red-300 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Soup packets</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Groceries</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Checkers.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                      <p class="text-base font-medium leading-none text-gray-700 block pb-1">Milk</p>
                                      <span class="text-sm font-sm leading-none text-gray-400 block">Groceries</span>
                                  </div>
                                </td>
                                
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Dischem.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Adcodol</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Medicine</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Checkers.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Omega 3</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Medicine</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Checkers.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-200 hover:border-gray-400 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div class="bg-gray-200 rounded-sm w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm  w-full h-full justify-center items-center">
                                              <x-heroicon-o-check class="w-5 h-5 text-white-800"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                  <div class="flex flex-col items-left pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 block pb-1">Petrol</p>
                                    <span class="text-sm font-sm leading-none text-gray-400 block">Transport</span>
                                  </div>
                                </td>
                                
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                        <p class="text-sm leading-none text-gray-600 ml-2">R500</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        
                                    <img src="/images/shops/Dischem.png" class="w-6 h-6 rounded-sm">
                                    </div>
                                </td>

                                
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="focus:ring-2 rounded-md focus:outline-none float-right" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <x-heroicon-o-pencil-square class="w-5 h-5 text-gray-500 cursor-pointer hover:text-gray-800"/>
                                        </button>
                                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>.checkbox:checked + .check-icon {
  display: flex;
}
</style>
        <script>function dropdownFunction(element) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                list.classList.add("target");
                for (i = 0; i < dropdowns.length; i++) {
                    if (!dropdowns[i].classList.contains("target")) {
                        dropdowns[i].classList.add("hidden");
                    }
                }
                list.classList.toggle("hidden");
            }</script>
      </div>
    </main>
  </div>

  @if (Route::has('login'))
  <div class="h-14.5 hidden lg:block"></div>
  @endif
</x-layout>