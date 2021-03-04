    <div>
        <div class="mt-8">
            <a href="#">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$Movie['poster_path']}}" alt="Img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$Movie['title']}}</a>
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

