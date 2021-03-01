<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
 <nav class="border-b border-gray-800">
     <div class="container mx-auto flex px-4 flex-col md:flex-row items-center justify-between px-4 py-7">
         <ul class="flex flex-col md:flex-row items-center">
             <li>
                 <a href="/" class="text-2xl no-underline text-white hover:text-blue-dark font-sans font-bold">Theater</a><br>
             </li>
             <li class="md:ml-16">
                 <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">Movies</a>
             </li>
             <li class="md:ml-6">
                 <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">TV shows</a>
             </li>
             <li class="md:ml-6">
                 <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">Actors</a>
             </li>
         </ul>
         <div class="flex flex-col md:fex-row items-center">
             <div class="relative mt-3 md:mt-0">
                 <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
             </div>
         </div>
     </div>
 </nav>
@yield('content')
</body>
</html>
