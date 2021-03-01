@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex-none flex-col md:flex-row">
            <img src="#" alt="Img " class="md:w-96" style="width: 24rem">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Title(2020)</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>star</span>
                    <span class="ml-1">88%</span>
                    <span class="mx-1">|</span>
                    <span>Jan 4, 2020</span>
                    <span class="mx-1">|</span>
                    <span>Action, Thriller, Comedy</span>
                </div>
                <p class="text-gray-300 mt-8">tekst</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Johan Derksen</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                        <div class="ml-8">
                            <div>Johan Klaas</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="#" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Naam</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>Paulus Paul</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Johannes
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
