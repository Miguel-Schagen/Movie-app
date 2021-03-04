@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path']}}" alt="Img " class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $Movie['title'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>Rating</span>
                    <span class="ml-1">{{$Movie['vote_average']}}</span>
                    <span class="mx-1">|</span>
                    <span>{{\Carbon\Carbon::parse($Movie['release_date'])->format('M d, Y')}}</span>
                    <span class="mx-1">|</span>
                    <span>
                        @foreach($Movie['genres'] as $genre)
                            {{$genre['name']}}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>
                <p class="text-gray-300 mt-8">{{ $Movie['overview'] }}</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach($Movie['credits']['crew'] as $crew)
                            @if($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew ['job']}}</div>
                                </div>
                            @else
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
                @if (count($Movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{ $Movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                            <span class="ml-2"><i class="uil uil-play-circle text-gray-900 mr-2 "></i>Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-5 gap-8 ">
                @foreach($Movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="{{ route('actors.show', $cast['id']) }}">
                                <img src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$cast['name']}}</a>
                                <div class="text-gray-400 text-sm">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="movie-images">
        <div class="container mx-auto px=4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-3 gap-8">
                @foreach($Movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
