<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
    @livewireStyles
</head>
<body class="font-sans bg-gray-900 text-white">
 <nav class="border-b border-gray-800">
     <div class="container mx-auto flex px-4 flex-col md:flex-row items-center justify-between px-4 py-7">
         <ul class="flex flex-col md:flex-row items-center">
             <li>
                 <a href="{{route('movies.index')}}" class="text-2xl no-underline text-white hover:text-blue-dark font-sans font-bold"><i class="uil uil-film"></i> Theater</a><br>
             </li>
             <li class="ml-16">
                 <a href="{{route('movies.index')}}" class="hover:text-gray-300 mt-3 md:mt-0">Movies</a>
             </li>
             <li class="ml-6">
                 <a href="{{route('tv.index')}}" class="hover:text-gray-300 mt-3 md:mt-0">TV shows</a>
             </li>
             <li class="ml-6">
                 <a href="{{route('actors.index')}}" class="hover:text-gray-300 mt-3 md:mt-0">Actors</a>
             </li>
         </ul>
         <div class="flex flex-col md:fex-row items-center">
             <livewire:search-dropdown/>
         </div>
     </div>
 </nav>
    @yield('content')
 <footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">
     <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
         <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
             <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                 Customization
             </div>
             <a href="{{route('movies.index')}}" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                 Movies
             </a>
             <a href="{{route('tv.index')}}" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                 Tv Shows
             </a>
             <a href="{{route('actors.index')}}" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                 Actors
             </a>
         </div>
         <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
             <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                 Community
             </div>
             <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                 Twitter
             </a>
             <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                 YouTube
             </a>
         </div>
     </div>
     <div class="pt-2">
         <div class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-800 text-gray-400 text-sm flex-col md:flex-row max-w-6xl">
             <div class="mt-2">
                 © Copyright 2021-year. All Rights Reserved.
             </div>
             <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                 <a href="#" class="w-6 mx-1">
                     <i class="uil uil-facebook-f"></i>
                 </a>
                 <a href="#" class="w-6 mx-1">
                     <i class="uil uil-twitter-alt"></i>
                 </a>
                 <a href="#" class="w-6 mx-1">
                     <i class="uil uil-youtube"></i>
                 </a>
                 <a href="#" class="w-6 mx-1">
                     <i class="uil uil-linkedin"></i>
                 </a>
                 <a href="#" class="w-6 mx-1">
                     <i class="uil uil-instagram"></i>
                 </a>
             </div>
         </div>
     </div>
 </footer>
 @livewireScripts
</body>
</html>
