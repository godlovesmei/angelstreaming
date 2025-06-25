@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6 text-white">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Manage Movies</h1>
        <a href="{{ route('admin.movies.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Add New Movie</a>
    </div>

    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-700">
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Genre</th>
                <th class="border px-4 py-2">Year</th>
                <th class="border px-4 py-2">Duration</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr class="border-b border-gray-600">
                <td class="px-4 py-2">{{ $movie->title }}</td>
                <td class="px-4 py-2">{{ $movie->genre }}</td>
                <td class="px-4 py-2">{{ $movie->release_year }}</td>
                <td class="px-4 py-2">{{ $movie->duration }}</td>
                <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('admin.movies.edit', $movie->id) }}" class="text-blue-400 hover:underline">Edit</a>
                    <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
