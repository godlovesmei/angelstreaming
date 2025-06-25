@extends('layouts.app')

@section('content')
<section class="px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-28">
    <div class="bg-gray-900 p-6 md:p-10 rounded-2xl shadow-2xl">
        <div class="flex flex-col md:flex-row gap-8">
            <img src="{{ $movie['image'] }}"
                class="w-full md:w-1/3 max-h-[500px] object-cover rounded-xl shadow-lg" alt="{{ $movie['title'] }}" />
            <div class="flex-1 text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $movie['title'] }}</h1>
                <p class="text-sm text-gray-400 mb-3 font-medium">
                    {{ $movie['genre'] }} • {{ $movie['year'] }} • {{ $movie['duration'] }}
                </p>
                <p class="text-base leading-relaxed mb-6 text-gray-200">{{ $movie['description'] }}</p>
                <div class="aspect-video">
                    <video controls class="w-full h-full rounded-lg border border-gray-700">
                        <source src="{{ asset($movie['video_path']) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
