<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AngelStream - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="pt-0">


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
  <a href="detailmovies.html" class="movie-link" data-genre="sci-fi">
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
