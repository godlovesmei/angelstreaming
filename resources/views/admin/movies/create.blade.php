@extends('layouts.admin')

@section('content')
<div class="px-6 py-10 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">Add New Movie</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-600 text-white p-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-white">Title</label>
            <input type="text" name="title" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Description</label>
            <textarea name="description" rows="4" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Genre</label>
            <input type="text" name="genre" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Release Year</label>
            <input type="number" name="release_year" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Duration</label>
            <input type="text" name="duration" placeholder="e.g. 2h 30m" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Image URL</label>
            <input type="text" name="image" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-white">Video Path (optional)</label>
            <input type="text" name="video_path" class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-600 text-white">
        </div>

        <div class="text-right">
            <button type="submit" class="px-6 py-2 rounded bg-[#9ABAFF] text-white font-semibold hover:bg-[#b1c6ff] transition">
                Create Movie
            </button>
        </div>
    </form>
</div>
@endsection
