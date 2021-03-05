@extends('layouts.main')

@section('content')
    <div class="flex items-center justify-center px-5 py-5 relative" x-data="{showCookieBanner:true}">
        <section class="w-full p-5 lg:px-24 absolute top-0 bg-gray-600" x-show="showCookieBanner">
            <div class="md:flex items-center -mx-3">
                <div class="md:flex-1 px-3 mb-5 md:mb-0">
                    <p class="text-center md:text-left text-white text-xs leading-tight md:pr-12">We and selected partners and related companies, use cookies and similar technologies as specified in our Cookies Policy. You agree to consent to the use of these technologies by clicking Accept, or by continuing to browse this website. You can learn more about how we use cookies and set cookie preferences in Settings.</p>
                </div>
                <div class="px-3 text-center">
                    <button id="btn" class="py-2 px-8 bg-green-400 hover:bg-green-500 text-white rounded font-bold text-sm shadow-xl" @click.prevent="showCookieBanner=!showCookieBanner">Accept cookies</button>
                </div>
            </div>
        </section>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-5 gap-8">
                @foreach($popularMovies as $Movie)
                    <div>
                        <div class="mt-8">
                            <a href="{{ route('movies.show', $Movie['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path']}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="{{ route('movies.show', $Movie['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$Movie['title']}}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span><i class="uil uil-star text-yellow-500"></i></span>
                                    <span class="ml-1">{{$Movie['vote_average']}}</span>
                                    <span class="mx-1">|</span>
                                    <span>{{\Carbon\Carbon::parse($Movie['release_date'])->format('M d, Y')}}</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    @foreach($Movie['genre_ids'] as $genre)
                                        {{$genres->get($genre) }}@if (!$loop->last), @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="new-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">New Movies</h2>
            <div class="grid grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $Movie)
                    <div>
                        <div class="mt-8">
                            <a href="{{ route('movies.show', $Movie['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path']}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="{{ route('movies.show', $Movie['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$Movie['title']}}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Rating</span>
                                    <span class="ml-1">{{$Movie['vote_average']}}</span>
                                    <span class="mx-1">|</span>
                                    <span>{{\Carbon\Carbon::parse($Movie['release_date'])->format('M d, Y')}}</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    @foreach($Movie['genre_ids'] as $genre)
                                        {{$genres->get($genre) }}@if (!$loop->last), @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
