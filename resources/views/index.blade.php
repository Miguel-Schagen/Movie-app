@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="#" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Titel</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>star</span>
                        <span class="ml-1">88%</span>
                        <span class="mx-1">|</span>
                        <span>Jan 4, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="new-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">New Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="#" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Titel</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>star</span>
                        <span class="ml-1">88%</span>
                        <span class="mx-1">|</span>
                        <span>Jan 4, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
        </div>
@endsection
