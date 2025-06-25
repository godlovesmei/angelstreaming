<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller; // ✅ tambahkan ini

class HomeController extends Controller


{
    public function index()
    {
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

        $movies = [
            [
                'slug' => 'avatar-the-way-of-water',
                'title' => 'Avatar: The Way of Water',
                'genre' => 'Sci-Fi',
                'genre_slug' => 'sci-fi',
                'image' => 'https://wallpapercave.com/wp/wp11685722.png',
                'rating' => '7.9',
                'year' => '2022',
                'duration' => '3h 12m',
                'video_path' => 'uploads/Avatar_The_Way_of_Water_Official_Trailer.mp4'
            ]
        ];

        return view('home', compact('banners', 'movies'));
    }

    public function show($slug)
    {
        // Simulasi ambil dari database
        $movie = [
            'slug' => 'avatar-the-way-of-water',
            'title' => 'Avatar: The Way of Water',
            'genre' => 'Sci-Fi',
            'genre_slug' => 'sci-fi',
            'image' => 'https://wallpapercave.com/wp/wp11685722.png',
            'rating' => '7.9',
            'year' => '2022',
            'duration' => '3h 12m',
            'video_path' => 'uploads/Avatar_The_Way_of_Water_Official_Trailer.mp4',
            'description' => 'Jake Sully lives with his newfound family formed on the planet of Pandora...'
        ];

        if ($slug !== $movie['slug']) {
            abort(404);
        }

        return view('pages.movie-detail', compact('movie'));
    }
}
