<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AngelStream - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      background-color: #000000;
    }
    .banner-text-shadow {
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
    }
    .navbar-bg {
      background: rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      transition: all 0.3s ease;
    }
    .navbar-hidden {
      transform: translateY(-100px);
    }
    .profile-circle {
      width: 30px;
      height: 30px;
      background: #9ABAFF;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000;
      font-weight: bold;
    }
    .notification-badge {
      position: absolute;
      top: -5px;
      right: -5px;
      background: #ef4444;
      color: white;
      border-radius: 50%;
      width: 15px;
      height: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      font-weight: bold;
    }
    .banner-style {
      background: rgba(0, 0, 0, 0.6);
      padding: 2rem;
      border-radius: 1rem;
      backdrop-filter: blur(5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
    }
    .banner-style h1 {
      font-size: 3.5rem;
      color: #9ABAFF;
    }
    .banner-style p {
      color: #ddd;
    }
    .movie-card {
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      background: linear-gradient(145deg, rgba(255, 255, 255, 0.02), rgba(0, 0, 0, 0.3));
    }
    .movie-card:hover {
      transform: translateY(-12px) scale(1.03);
      box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.6);
      border-color: rgba(154, 186, 255, 0.3);
    }
    .glass-effect {
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .title-section {
      background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.95) 100%);
      backdrop-filter: blur(8px);
    }
    .image-overlay {
      background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
    }
  </style>
</head>
<body class="pt-0">

  <!-- Navigation -->

  <nav id="navbar" class="fixed top-8 left-0 right-0 z-50
  mx-auto max-w-5xl
  bg-white/5 backdrop-blur-lg rounded-full
  shadow-lg flex items-center justify-between
  px-20 py-2
  transition-all duration-300 transition-transform">

  <!-- Container flex dengan tiga bagian -->
  <div class="flex items-center flex-1">
    <div class="text-xl font-bold text-[#9ABAFF]">
      AngelStream
    </div>
  </div>
  <ul class="flex gap-6 text-white font-medium text-sm flex-1 justify-center">
    <li><a href="#" class="cursor-pointer hover:text-[#9ABAFF] transition-colors duration-200">Home</a></li>
    <li><a href="login.html" class="cursor-pointer hover:text-[#9ABAFF] transition-colors duration-200">Browse</a></li>
    <li><a href="#" class="cursor-pointer hover:text-[#9ABAFF] transition-colors duration-200">Kids</a></li>
    <li><a href="#" class="cursor-pointer hover:text-[#9ABAFF] transition-colors duration-200">Support</a></li>
    <li><a href="#" class="cursor-pointer hover:text-[#9ABAFF] transition-colors duration-200">FAQ</a></li>
  </ul>

  <div class="flex items-center gap-3 flex-1 justify-end">
    <div class="cursor-pointer hover:text-[#9ABAFF] transition-colors">
      <!-- Search Icon SVG -->
      <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
      </svg>
    </div>
    <div class="relative cursor-pointer hover:text-[#9ABAFF] transition-colors">
      <!-- Notification Icon SVG -->
      <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
      </svg>
      <div class="notification-badge">2</div>
    </div>
    <div class="profile-circle cursor-pointer hover:opacity-80 transition-opacity text-sm">👤</div>
  </div>
  </nav>

  <!-- Sidebar -->
  <aside class="fixed top-0 left-0 h-screen w-16 bg-black flex flex-col items-center py-6 space-y-6 z-50">
    <div class="w-10 h-10 rounded-full bg-[#9ABAFF] flex items-center justify-center font-bold text-black text-lg shadow-md">S</div>
    <nav class="flex flex-col items-center gap-6 mt-6 text-white text-xl">
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="home" class="w-6 h-6 text-white"></i>
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="bar-chart" class="w-6 h-6 text-white"></i>
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="user" class="w-6 h-6 text-white"></i>
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="calendar" class="w-6 h-6 text-white"></i>
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="zap" class="w-6 h-6 text-white"></i>
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
         <i data-lucide="bell" class="w-6 h-6 text-white"></i>
      </button>
    </nav>
    <div class="flex-grow"></div>
    <div class="flex flex-col items-center gap-4">
      <button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-[#9ABAFF]/30 transition transform hover:scale-125 duration-300">
        <i class="fas fa-cog"></i>
      </button>
      <img src="https://i.pravatar.cc/40" alt="User" class="rounded-full w-10 h-10 border-2 border-[#9ABAFF] shadow transition transform hover:scale-125 duration-300" />
    </div>
  </aside>

  <!-- Banner Section -->
  <section class="relative w-full h-screen overflow-hidden">
    <div id="bannerContainer" class="absolute inset-0 flex">
      <!-- Wicked -->
      <div class="absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000" id="slide-0">
        <div class="w-full h-full">
          <img src="https://wallpapercave.com/wp/wp14661325.jpg" alt="Wicked" class="w-full h-full object-cover" />
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent flex items-center">
          <div class="ml-24 max-w-2xl">
            <p class="uppercase text-sm text-[#9ABAFF] font-semibold tracking-wider">Musical Fantasy</p>
            <h1 class="text-6xl font-bold mt-2 text-[#9ABAFF] banner-text-shadow">Wicked</h1>
            <div class="flex items-center gap-4 mt-4 text-gray-300 banner-text-shadow">
              <span class="text-lg">2024</span>
              <span>•</span>
              <span>2h 40m</span>
              <span>•</span>
              <span class="px-3 py-1 border-2 rounded-full border-[#9ABAFF] text-[#9ABAFF] text-sm font-semibold">Musical</span>
              <span class="text-yellow-400 text-lg">★ 8.2</span>
            </div>
            <p class="mt-6 text-lg leading-relaxed banner-text-shadow text-white">
              The untold story of the witches of Oz. Elphaba, a young woman misunderstood because of her unusual green skin, and Glinda, a popular aristocrat gilded by privilege, become unlikely friends in the magical Land of Oz.
            </p>
            <div class="mt-8 flex gap-4 banner-text-shadow">
              <button class="bg-white text-black px-8 py-3 rounded-lg hover:bg-gray-200 transition-all duration-200 font-semibold text-lg flex items-center gap-2">
                <span>▶</span> Watch Now
              </button>
              <button class="border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-black transition-all duration-200 font-semibold text-lg flex items-center gap-2">
                <span>+</span> My List
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Super Mario Bros -->
      <div class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000" id="slide-1">
        <div class="w-full h-full">
          <img src="https://wallpapercave.com/wp/wp12172786.jpg" alt="The Super Mario Bros Movie" class="w-full h-full object-cover" />
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent flex items-center">
          <div class="ml-24 max-w-2xl">
            <p class="uppercase text-sm text-[#9ABAFF] font-semibold tracking-wider">Animated Adventure</p>
            <h1 class="text-6xl font-bold mt-2 text-[#9ABAFF] banner-text-shadow">The Super Mario Bros. Movie</h1>
            <div class="flex items-center gap-4 mt-4 text-gray-300 banner-text-shadow">
              <span class="text-lg">2023</span>
              <span>•</span>
              <span>1h 32m</span>
              <span>•</span>
              <span class="px-3 py-1 border-2 rounded-full border-[#9ABAFF] text-[#9ABAFF] text-sm font-semibold">Animation</span>
              <span class="text-yellow-400 text-lg">★ 7.0</span>
            </div>
            <p class="mt-6 text-lg leading-relaxed banner-text-shadow text-white">
              A plumber named Mario travels through an underground labyrinth with his brother Luigi, trying to save a captured princess. From the world of Nintendo comes this colorful adventure through the Mushroom Kingdom.
            </p>
            <div class="mt-8 flex gap-4 banner-text-shadow">
              <button class="bg-white text-black px-8 py-3 rounded-lg hover:bg-gray-200 transition-all duration-200 font-semibold text-lg flex items-center gap-2">
                <span>▶</span> Watch Now
              </button>
              <button class="border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-black transition-all duration-200 font-semibold text-lg flex items-center gap-2">
                <span>+</span> My List
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-3">
      <div id="indicator-0" class="w-3 h-3 rounded-full bg-[#9ABAFF] cursor-pointer transition-all duration-300"></div>
      <div id="indicator-1" class="w-3 h-3 rounded-full bg-white/30 cursor-pointer transition-all duration-300"></div>
    </div>
  </section>

 <section class="px-6 sm:px-12 md:px-20 mt-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-white">Popular on AngelStream</h2>
    <select id="genreFilter" class="bg-gray-800 text-white text-sm rounded-md px-3 py-2 focus:outline-none border border-[#9ABAFF]">
      <option value="all">All Genres</option>
      <option value="sci-fi">Sci-Fi</option>
      <option value="action">Action</option>
      <option value="drama">Drama</option>
      <option value="comedy">Comedy</option>
      <option value="superhero">Superhero</option>
      <option value="animation">Animation</option>
      <option value="musical">Musical</option>
    </select>
  </div>

  <!-- Movie Cards Grid Section with 10 Unique Movies -->
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">

  <!-- Avatar -->
  <a href="movie" class="movie-link" data-genre="sci-fi">
    <div class="movie-card group relative bg-gradient-to-t from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://wallpapercave.com/wp/wp11685722.png" alt="Avatar" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-[#9ABAFF]/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Sci-Fi</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.9</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-[#9ABAFF] transition-colors duration-200">Avatar: The Way of Water</h3>
        <p class="text-xs text-gray-400 mt-1">2022 • 3h 12m</p>
      </div>
    </div>
  </a>

   <!-- John Wick 4 -->
  <a href="movie-detail.html?id=john-wick-4" class="movie-link" data-genre="action">
    <div class="movie-card group relative bg-gradient-to-t from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://screenscore.digitalmama.id/wp-content/uploads/2025/05/john-wick-chapter-4.jpg" alt="John Wick" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-red-500/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Action</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 8.0</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-red-400 transition-colors duration-200">John Wick: Chapter 4</h3>
        <p class="text-xs text-gray-400 mt-1">2023</p>
      </div>
    </div>
  </a>

  <!-- Oppenheimer -->
  <a href="movie-detail.html?id=oppenheimer" class="movie-link" data-genre="drama">
    <div class="movie-card group relative bg-gradient-to-t from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://wallpapercave.com/wp/wp14833113.webp" alt="Oppenheimer" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-purple-500/90 text-black text-xs font-semibold px-2 py-1 rounded-full shadow-md">Drama</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 8.6</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-purple-400 transition-colors duration-200">Oppenheimer</h3>
        <p class="text-xs text-gray-400 mt-1">2023</p>
      </div>
    </div>
  </a>

  <!-- Barbie -->
  <a href="movie-detail.html?id=barbie" class="movie-link" data-genre="comedy">
    <div class="movie-card group relative bg-gradient-to-t from-pink-900 to-pink-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://i.pinimg.com/736x/f6/00/3c/f6003c9d9107d2aaf4df9a9aee034455.jpg" alt="Barbie" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-pink-300/90 text-black text-xs font-semibold px-2 py-1 rounded-full shadow-md">Comedy</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.2</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-pink-300 transition-colors duration-200">Barbie</h3>
        <p class="text-xs text-gray-400 mt-1">2023</p>
      </div>
    </div>
  </a>

  <!-- The Batman -->
  <a href="movie-detail.html?id=the-batman" class="movie-link" data-genre="superhero">
    <div class="movie-card group relative bg-gradient-to-t from-gray-800 to-gray-700 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://image.tmdb.org/t/p/w300/74xTEgt7R36Fpooo50r9T25onhq.jpg" alt="The Batman" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-gray-500/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Superhero</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.9</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-gray-300 transition-colors duration-200">The Batman</h3>
        <p class="text-xs text-gray-400 mt-1">2022</p>
      </div>
    </div>
  </a>

  <!-- The Whale -->
  <a href="movie-detail.html?id=the-whale" class="movie-link" data-genre="drama">
    <div class="movie-card group relative bg-gradient-to-t from-blue-900 to-blue-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://image.tmdb.org/t/p/w300/jQ0gylJMxWSL490sy0RrPj1Lj7e.jpg" alt="The Whale" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-blue-300/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Drama</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.8</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-blue-300 transition-colors duration-200">The Whale</h3>
        <p class="text-xs text-gray-400 mt-1">2022</p>
      </div>
    </div>
  </a>

  <!-- The Super Mario Bros Movie -->
  <a href="movie-detail.html?id=super-mario-bros" class="movie-link" data-genre="animation">
    <div class="movie-card group relative bg-gradient-to-t from-red-900 to-red-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://wallpapercave.com/wp/wp11992373.jpg" alt="Mario Movie" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-red-300/90 text-black text-xs font-semibold px-2 py-1 rounded-full shadow-md">Animation</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.1</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-red-300 transition-colors duration-200">Super Mario Bros. Movie</h3>
        <p class="text-xs text-gray-400 mt-1">2023</p>
      </div>
    </div>
  </a>

  <!-- Top Gun: Maverick -->
  <a href="movie-detail.html?id=top-gun-maverick" class="movie-link" data-genre="action">
    <div class="movie-card group relative bg-gradient-to-t from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
      <img src="https://image.tmdb.org/t/p/w300/62HCnUTziyWcpDaBO2i1DX17ljH.jpg" alt="Top Gun Maverick" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
      <div class="absolute top-2 left-2 flex items-center gap-2">
        <span class="bg-red-500/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Action</span>
      </div>
      <div class="absolute top-2 right-2">
        <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 8.3</span>
      </div>
      <div class="p-4 text-white">
        <h3 class="text-base font-bold leading-tight group-hover:text-red-400 transition-colors duration-200">Top Gun: Maverick</h3>
        <p class="text-xs text-gray-400 mt-1">2022</p>
      </div>
    </div>
  </a>

  <!-- Everything Everywhere All at Once -->
  <div data-genre="sci-fi" class="movie-card group relative bg-gradient-to-t from-gray-900 to-indigo-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
    <img src="https://image.tmdb.org/t/p/w300/w3LxiVYdWWRvEVdn5RYq6jIqkb1.jpg" alt="Everything Everywhere" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
    <div class="absolute top-2 left-2 flex items-center gap-2">
      <span class="bg-indigo-300/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Sci-Fi</span>
    </div>
    <div class="absolute top-2 right-2">
      <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 8.1</span>
    </div>
    <div class="p-4 text-white">
      <h3 class="text-base font-bold leading-tight group-hover:text-indigo-300 transition-colors duration-200">Everything Everywhere All at Once</h3>
      <p class="text-xs text-gray-400 mt-1">2022</p>
    </div>
  </div>

  <!-- Wicked -->
  <div data-genre="musical" class="movie-card group relative bg-gradient-to-t from-green-900 to-emerald-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-300 cursor-pointer">
    <img src="https://wallpapercave.com/wp/wp14752800.jpg" alt="Wicked" class="w-full h-60 object-cover rounded-t-2xl group-hover:brightness-75 transition duration-300" />
    <div class="absolute top-2 left-2 flex items-center gap-2">
      <span class="bg-green-300/90 text-white text-xs font-semibold px-2 py-1 rounded-full shadow-md">Musical</span>
    </div>
    <div class="absolute top-2 right-2">
      <span class="bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-full shadow-md">★ 7.6</span>
    </div>
    <div class="p-4 text-white">
      <h3 class="text-base font-bold leading-tight group-hover:text-green-300 transition-colors duration-200">Wicked</h3>
      <p class="text-xs text-gray-400 mt-1">2024</p>
    </div>
  </div>

  </div>
</section>


  <script>
    const slides = document.querySelectorAll('[id^="slide-"]');
    const indicators = document.querySelectorAll('[id^="indicator-"]');
    const navbar = document.getElementById('navbar');
    let currentIndex = 0;
    const total = 2;
    let autoSlideInterval;

    function handleScroll() {
      const currentScrollY = window.scrollY;
      if (currentScrollY > 50) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    }

    function updateSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.classList.remove('opacity-0');
          slide.classList.add('opacity-100');
          slide.style.zIndex = '2';
        } else {
          slide.classList.remove('opacity-100');
          slide.classList.add('opacity-0');
          slide.style.zIndex = '1';
        }
      });
      currentIndex = index;
      indicators.forEach((indicator, i) => {
        if (i === currentIndex) {
          indicator.classList.remove('bg-white/30');
          indicator.classList.add('bg-[#9ABAFF]');
        } else {
          indicator.classList.remove('bg-[#9ABAFF]');
          indicator.classList.add('bg-white/30');
        }
      });
    }

    function nextSlide() {
      const nextIndex = (currentIndex + 1) % total;
      updateSlide(nextIndex);
    }

    function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    window.addEventListener('scroll', handleScroll);
    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => {
        stopAutoSlide();
        updateSlide(index);
        setTimeout(startAutoSlide, 3000);
      });
    });
    document.querySelector('section').addEventListener('mouseenter', stopAutoSlide);
    document.querySelector('section').addEventListener('mouseleave', startAutoSlide);
    startAutoSlide();

    lucide.createIcons();

    let lastScrollY = window.scrollY;

    function handleScroll() {
      const currentScrollY = window.scrollY;

      if (currentScrollY > lastScrollY && currentScrollY > 100) {
    // Scroll ke bawah
    navbar.classList.add('navbar-hidden');
  } else {
    // Scroll ke atas
    navbar.classList.remove('navbar-hidden');
  }
  lastScrollY = currentScrollY;
}


document.getElementById('genreFilter').addEventListener('change', function () {
  const selectedGenre = this.value;
  const movies = document.querySelectorAll('.movie-card');

  movies.forEach(movie => {
    const genre = movie.getAttribute('data-genre');

    if (selectedGenre === 'all' || genre === selectedGenre) {
      movie.style.display = 'block';
    } else {
      movie.style.display = 'none';
    }
  });
});

  </script>
</body>
</html>
