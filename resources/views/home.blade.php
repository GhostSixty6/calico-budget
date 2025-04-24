<x-layout>

  <div class="bg-slate-800 py-8 px-6 md:px-8 rounded-xl">

    <div class="pb-2">
      <p id="nav-list" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal uppercase text-white"><x-heroicon-s-queue-list class="w-6 h-6 float-left mr-2 relative top-2  text-green-400" />List</p>
    </div>

    <table id="products-list" class="w-full flex flex-col flex-no-wrap items-center rounded-lg my-5">
      <thead>
        <tr class="flex flex-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
          <th scope="col" class="text-white text-bold pb-4">
            <button id="filter-status" class="table-filter rounded-md px-1 py-1 text-white hover:bg-slate-700 hover:text-white ml-6 float-left cursor-pointer">
              <x-heroicon-o-check-circle class="w-6 h-6" />
            </button>
          </th>
          <th scope="col" class="text-white text-bold pb-4">
            <button id="filter-shop" class="table-filter rounded-md px-1 py-1 text-white hover:bg-gray-700 hover:text-white ml-4 float-left cursor-pointer">
              <x-heroicon-o-building-storefront class="w-6 h-6" />
            </button>
          </th>
          <th scope="col" class="text-white text-bold pb-4">
            <button id="filter-due" class="table-filter rounded-md px-1 py-1 text-white hover:bg-gray-700 hover:text-white ml-4 float-left cursor-pointer">
              <x-heroicon-o-clock class="w-6 h-6" />
            </button>
          </th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $row)
        <tr class="flex flex-row flex-wrap border-b border-slate-900 sm:bg-none sm:table-row mb-2 sm:mb-0">
          <td class="py-3 px-2">
            <div class="w-7 h-7 flex flex-shrink-0 justify-center items-center relative">
              <input placeholder="checkbox" type="checkbox" id="status-{{ $row['id'] }}" class="product-field checkbox absolute cursor-pointer w-full h-full" {{ $row['status'] ? 'checked' : '' }} />
            </div>
          </td>
          <td class="py-3 px-2 grow shrink">
            <input id="title-{{ $row['id'] }}" class="product-field text-gray-400 text-base inline-block w-full rounded py-2 px-2 bg-slate-900 outline-none border-none focus:text-white" type="text" placeholder="Title" value="{{ $row['title'] }}">
          </td>
          <td class="py-3 px-2 basis-1/3 grow shrink max-w-1/3">
            <input id="price-{{ $row['id'] }}" class="product-field text-gray-400 text-base inline-block w-full rounded py-2 px-2 bg-slate-900 outline-none border-none focus:text-white" type="text" placeholder="Price" value="{{ $row['price'] }}">
          </td>
          <td class="py-3 px-2 basis-1/4 grow shrink">
            <select id="shop-{{ $row['id'] }}" class="product-field js-choice">
              @foreach($shops as $shop)
              <option value="{{ $shop }}" {{ $row['shop'] === $shop ? 'selected' : '' }}>{{ $shop}}</option>
              @endforeach
            </select>
          </td>
          <td class="py-3 px-2 basis-1/4 grow shrink hidden md:block">
            <select id="category-{{ $row['id'] }}" class="product-field js-choice">
              @foreach($categories as $category)
              <option value="{{ $category }}" {{$row['category'] == $category ? 'selected' : ''}}>{{ $category}}</option>
              @endforeach
            </select>
          </td>
          <td class="py-3 px-2 basis-1/4 grow shrink">
            <select id="due-{{ $row['id'] }}" class="product-field js-choice">
              @foreach($dues as $due)
              <option value="{{ $due }}" {{$row['due'] == $due ? 'selected' : ''}}>{{ $due}}</option>
              @endforeach
            </select>
          </td>
          <td class="py-3 px-2 basis-1/4 grow shrink hidden md:block">
            <button id="delete-{{ $row['id'] }}" class="product-delete outline-none">
              <x-heroicon-o-trash class="w-5 h-5 text-gray-500 cursor-pointer hover:text-red-400" />
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
    <table id="nav-new" class="w-full flex flex-col flex-no-wrap border border-slate-900 sm:bg-none rounded-lg mt-8">
      <tbody>
        <tr class="flex flex-col sm:flex-row flex-wrap sm:bg-none mb-2 sm:mb-0">
          <td class="py-3 px-2 grow shrink">
            <input id="title-create" class="text-gray-400 text-sm sm:text-base inline-block w-full rounded py-2 px-2 bg-slate-900 outline-none border-none focus:text-white" type="text" autocomplete="off" placeholder="Title" value="">
          </td>
          <td class="py-3 px-2 grow shrink">
            <input id="price-create" class="text-gray-400 text-sm sm:text-base inline-block w-full rounded py-2 px-2 bg-slate-900 outline-none border-none focus:text-white" type="text" autocomplete="off" placeholder="Price" value="">
          </td>
          <td class="py-3 px-2 grow shrink">
            <select id="shop-create" class="js-choice">
              @foreach($shops as $shop)
              <option value="{{ $shop }}">{{ $shop }}</option>
              @endforeach
            </select>
          </td>
          <td class="py-3 px-2 grow shrink">
            <select id="category-create" class="js-choice">
              @foreach($categories as $category)
              <option value="{{ $category }}">{{ $category }}</option>
              @endforeach
            </select>
          </td>
          <td class="py-3 px-2 grow shrink">
            <select id="due-create" class="js-choice">
              @foreach($dues as $due)
              <option value="{{ $due }}">{{ $due }}</option>
              @endforeach
            </select>
          </td>
          <td class="pt-5 px-2 grow shrink">
            <button id="product-create" class="product-delete outline-none">
              <x-heroicon-s-plus-circle class="w-7 h-7 text-gray-500 cursor-pointer hover:text-green-400" />
            </button>
          </td>
        </tr>
      </tbody>
    </table>

  </div>

  <div class="bg-slate-800 py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-xl mt-8">
    <div class="overflow-x-auto">

      <p id="nav-stats" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl mb-8 font-bold leading-normal text-white uppercase"><x-heroicon-s-chart-bar class="w-6 h-6 float-left mr-2 relative top-2  text-green-400" />Stats</p>

      <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-gray-900">
          <div class="p-5">
            <x-heroicon-s-arrow-left-end-on-rectangle class="w-8 h-8 float-right mr-2 text-blue-400" />
            <div class="ml-2 w-full flex-1">
              <div class="mt-2">
                <input id="user-income" class="appearance-none block w-32 bg-gray-900 text-white text-3xl font-bold rounded px-2 leading-tight focus:outline-none focus:bg-gray-700 focus:border-gray-500" id="title" type="text" placeholder="Current Income" value="{{ $stats['income'] }}">
              </div>
              <div class="mt-1 text-base text-gray-400">Current Income</div>
            </div>
          </div>
        </div>
        <div class="rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-gray-900">
          <div class="p-5">
            <x-heroicon-s-arrow-left-start-on-rectangle class="w-8 h-8 float-right mr-2 text-red-400" />
            <div class="ml-2 w-full flex-1">
              <div class="mt-3 text-3xl font-bold leading-8 text-white">{{ $stats['expenses'] }}</div>
              <div class="mt-1 text-base text-gray-400">Total Expenses</div>
            </div>
          </div>
        </div>
        <div class="rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-gray-900">
          <div class="p-5">
            <x-heroicon-o-receipt-percent class="w-8 h-8 float-right mr-2 text-orange-400" />
            <div class="ml-2 w-full flex-1">
              <div class="mt-3 text-3xl font-bold leading-8 text-white">{{ $stats['pending_expenses'] }}%</div>
              <div class="mt-1 text-base text-gray-400">Pending Expenses</div>
            </div>
          </div>
        </div>
        <div class="rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-gray-900">
          <div class="p-5">
            <x-heroicon-o-receipt-refund class="w-8 h-8 float-right mr-2 text-{{  $stats['left_over'] > 0 ? 'green' : 'red' }}-400" />
            <div class="ml-2 w-full flex-1">
              <div class="mt-3 text-3xl font-bold leading-8 text-white">{{ $stats['left_over'] }}</div>
              <div class="mt-1 text-base text-gray-400">Left Over</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>