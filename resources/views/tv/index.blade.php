@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular shows</h2>
            <div class="grid grid-cols-5 gap-8">
                @foreach($popularTv as $tvshow)
                    <div class="mt-8">
                        <a href="{{ route('tv.show', $tvshow['id']) }}">
                            <img src="{{ $tvshow['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('tv.show', $tvshow['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $tvshow['name'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span><i class="uil uil-star text-yellow-500"></i></span>
                                <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ $tvshow['first_air_date'] }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">{{ $tvshow['genres'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="new-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Top Rated Shows</h2>
            <div class="grid grid-cols-5 gap-8">
                @foreach($topRatedTv as $tvshow)
                    <div class="mt-8">
                        <a href="{{ route('tv.show', $tvshow['id']) }}">
                            <img src="{{ $tvshow['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('tv.show', $tvshow['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $tvshow['name'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span><i class="uil uil-star text-yellow-500"></i></span>
                                <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ $tvshow['first_air_date'] }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">{{ $tvshow['genres'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
