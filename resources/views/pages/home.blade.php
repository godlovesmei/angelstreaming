@extends('layouts.app')

@section('content')
    @php
    // Example banners data (biarkan kalau mau tetap ada)
    $banners = [
        [
            'image' => 'https://wallpapercave.com/wp/wp14661325.jpg',
            'title' => 'Wicked',
            'category' => 'Musical Fantasy',
            'year' => '2024',
            'duration' => '2h 40m',
            'genre' => 'Musical',
            'genre_slug' => 'musical',
            'rating' => '8.2',
            'desc' => 'The untold story of the witches of Oz...',
        ],
    ];

    // Hanya satu film
    $movies = [
        [
            'title' => 'Avatar: The Way of Water',
        'slug' => 'avatar-the-way-of-water', // ✅ tambahkan ini
        'genre' => 'Sci-Fi',
        'genre_slug' => 'sci-fi',
        'image' => 'https://wallpapercave.com/wp/wp11685722.png',
        'pill_color' => '[#9ABAFF]',
        'hover_color' => '[#9ABAFF]',
        'rating' => '7.9',
        'year' => '2022',
        'duration' => '3h 12m'
        ],
    ];
    @endphp

    @include('components.banner', ['banners' => $banners])

    <section class="px-6 sm:px-12 md:px-20 mt-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-white">Popular on AngelStream</h2>
            <select id="genreFilter" class="bg-gray-800 text-white text-sm rounded-md px-3 py-2 focus:outline-none border border-[#9ABAFF]">
                <option value="all">All Genres</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="animation">Animation</option>
                <option value="musical">Musical</option>
            </select>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
            @foreach($movies as $movie)
                @include('components.movie-card', ['movie' => $movie])
            @endforeach
        </div>
    </section>
@endsection
