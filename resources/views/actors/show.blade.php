@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <div class="flex-none">
                <img src="{{$actor['profile_path']}}" alt="Img " class="w-96">
                <ul class="flex items-center mt-4">
                    @if($social['facebook'])
                        <li class="ml-6">
                            <a href="{{$social['facebook']}}" title="Facebook">
                                <i class="uil uil-facebook"></i>
                            </a>
                        </li>
                    @endif
                    @if($social['instagram'])
                        <li class="ml-6">
                            <a href="{{$social['instagram']}}" title="Instagram">
                                <i class="uil uil-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if($social['twitter'])
                        <li class="ml-6">
                            <a href="{{$social['twitter']}}" title="Twitter">
                                <i class="uil uil-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if($actor['homepage'])
                        <li class="ml-6">
                            <a href="{{$actor['homepage']}}" title="Website">
                                <i class="uil uil-globe"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{$actor['name']}}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span><i class="uil uil-award"></i></span>
                    <span class="ml-2">{{$actor['birthday']}} in {{$actor['place_of_birth']}}</span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{$actor['biography']}}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach($knownForMovies as $movie)
                        <div class="mt-4">
                            <a href={{$movie['linkToPage']}}>
                                <img src="{{$movie["poster_path"]}}" alt="Foto" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <a href="{{ route('movies.show', $movie['id']) }}" class="text-sm loading-normal block text-gray-400 hover:text-white mt-1">
                                {{$movie['title']}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc loading-loose pl-5 mt-8">
                @foreach($credits as $credit)
                    <li>{{ $credit ['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
