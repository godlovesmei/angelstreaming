<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $title ?? 'Admin Panel - AngelStream' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Segoe UI', sans-serif; color: #fff; background-color: #0a0a0a; }
        .admin-navbar { background-color: #1f2937; padding: 1rem; }
        .admin-sidebar { width: 220px; background-color: #111827; height: 100vh; position: fixed; top: 0; left: 0; padding: 1.5rem 1rem; }
        .admin-sidebar a { display: block; padding: 0.5rem 1rem; color: #9ABAFF; text-decoration: none; margin-bottom: 0.5rem; border-radius: 0.375rem; }
        .admin-sidebar a:hover { background-color: #374151; }
        .admin-main { margin-left: 220px; padding: 2rem; }
    </style>
    @stack('styles')
</head>
<body>
    {{-- Admin Sidebar --}}
    <aside class="admin-sidebar">
        <h2 class="text-white text-lg font-bold mb-6">AngelStream Admin</h2>
        <a href="{{ route('admin.movies.index') }}">🎬 Movies</a>
        <a href="#">📁 Genres</a>
        <a href="#">👥 Users</a>
        <a href="#">⚙️ Settings</a>
    </aside>

    {{-- Main Content --}}
    <main class="admin-main">
        @yield('content')
    </main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
