@props(['movie'])

@php
    $slug = $movie['slug'] ?? '#';
    $genreSlug = $movie['genre_slug'] ?? 'unknown';
    $image = $movie['image'] ?? 'https://via.placeholder.com/300x400?text=No+Image';
    $title = $movie['title'] ?? 'Untitled';
    $genre = $movie['genre'] ?? 'Unknown';
    $rating = $movie['rating'] ?? '-';
    $year = $movie['year'] ?? '----';
    $duration = $movie['duration'] ?? null;
@endphp

<a href="{{ route('movies.show', $slug) }}"
   class="movie-link block"
   data-genre="{{ $genreSlug }}">
    <div class="movie-card group relative bg-gradient-to-t from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
        <img src="{{ $image }}" alt="{{ $title }}"
             class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />

        <div class="absolute top-2 left-2 flex items-center gap-2">
            <span class="bg-[#9ABAFF]/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">
                {{ $genre }}
            </span>
        </div>

        <div class="absolute top-2 right-2">
            <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">
                ★ {{ $rating }}
            </span>
        </div>

        <div class="p-4 text-white">
            <h3 class="text-base font-bold leading-tight group-hover:text-[#9ABAFF] transition-colors duration-200">
                {{ $title }}
            </h3>
            <p class="text-xs text-gray-400 mt-1">
                {{ $year }}{{ $duration ? ' • ' . $duration : '' }}
            </p>
        </div>
    </div>
</a>
