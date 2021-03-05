@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path']}}" alt="Img " class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $Movie['title'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span><i class="uil uil-star text-yellow-500"></i></span>
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
                        <button class="modal-open flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150"><i class="uil uil-play-circle text-gray-900 mr-2 "></i>Play Trailer</button>
                        <div class="modal opacity-0 pointer-events-none fixed w-500 h-650 top-0 left-0 flex items-center justify-center">
                            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                    </svg>

                                </div>
                                <iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/{{ $Movie['videos']['results'][0]['key']}}?autoplay=1&origin=http://movie-app.test" frameborder="0"></iframe>
                                <div class="modal-content py-4 text-left px-6">
                                    <div class="flex justify-between items-center pb-3">
                                        <div class="modal-close cursor-pointer z-50">
                                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-8">
                            <a href="{{'https://www.pathe.nl/films/actueel'}}">
                                <img src="{{'https://seeklogo.com/images/P/Pathe_-logo-FBC662CE19-seeklogo.com.png'}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150 py-10 gap-8">
                            </a>
                            <a href="{{'https://www.vuecinemas.nl/films/nu-in-de-bioscoop#filmposters'}}">
                                <img src="{{'https://www.vuecinemas.nl/img/logo.png'}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150 py-12 gap-8">
                            </a>
                        </div>
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
    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }

        function injectStyles(styleTag){
            const iframe = document.getElementById("my-frame");
            const embed = iframe.contentDocument;
            embed.head.appendChild(styleTag);
        }


    </script>
@endsection
