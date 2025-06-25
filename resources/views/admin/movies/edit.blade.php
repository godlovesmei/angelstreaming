@extends('layouts.admin')

@section('content')
<div class="px-6 py-10 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">Edit Movie</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-600 text-white p-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-white">Title</label>
            <input type="text" name="title" value="{{ old('title', $movie->title) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Description</label>
            <textarea name="description" rows="4"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white"
                required>{{ old('description', $movie->description) }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Genre</label>
            <input type="text" name="genre" value="{{ old('genre', $movie->genre) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Release Year</label>
            <input type="number" name="release_year" value="{{ old('release_year', $movie->release_year) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Duration</label>
            <input type="text" name="duration" value="{{ old('duration', $movie->duration) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Image URL</label>
            <input type="text" name="image" value="{{ old('image', $movie->image) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Video Path</label>
            <input type="text" name="video_path" value="{{ old('video_path', $movie->video_path) }}"
                class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white">
        </div>

        <div class="text-right">
            <button type="submit"
                class="px-6 py-2 rounded bg-[#9ABAFF] text-white font-semibold hover:bg-[#b1c6ff] transition">
                Update Movie
            </button>
        </div>
    </form>
</div>
@endsection
