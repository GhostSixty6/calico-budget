<!DOCTYPE html>
<html class="h-full bg-slate-900" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME', 'Site') }}</title>
  <link rel="icon" type="image/x-icon" href="/images/logo.svg">
  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/css/choices.css', 'resources/js/app.js'])
</head>

<body class="flex flex-row">
  <nav class="fixed bottom-0 left-0 w-screen flex-row h-16 z-99 bg-slate-950 flex px-2 py-4 items-center gap-12 sm:h-screen sm:top-0 sm:w-21 sm:flex-col">
    <a href="/" class="shrink-0">
      <img src="/images/logo.svg" class="size-8" alt="Logo">
    </a>
    <div class="flex flex-row grow shrink basis-auto sm:flex-col items-center gap-3">
      <a href="/#nav-list" class="rounded-md flex flex-col w-full items-center px-3 py-2 text-sm font-medium text-gray-300 uppercase hover:bg-slate-800 hover:text-white"><x-heroicon-s-queue-list class="mb-1 w-5 h-5" />List</a>
      <a href="/#nav-new" class="rounded-md flex flex-col w-full items-center px-3 py-2 text-sm font-medium text-gray-300 uppercase hover:bg-slate-800 hover:text-white"><x-heroicon-s-plus-circle class="mb-1 w-5 h-5" />New</a>
      <a href="/#nav-stats" class="rounded-md flex flex-col w-full items-center px-3 py-2 text-sm font-medium text-gray-300 uppercase hover:bg-slate-800 hover:text-white"><x-heroicon-s-chart-bar class="mb-1 w-5 h-5" />Stats</a>
    </div>
  </nav>
  <div class="h-full w-full max-w-screen sm:pl-12 md:pl-21 pb-16 sm:pb-0">
    <main>
      <div class="mx-auto md:max-w-7xl md:min-w-4xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="sm:px-6 w-full">
          {{ $slot }}
        </div>
      </div>
    </main>
  </div>
</body>

</html>