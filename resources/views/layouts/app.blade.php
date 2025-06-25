<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $title ?? 'AngelStream' }}</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            background-color: #000;
        }

        .banner-text-shadow {
            text-shadow: 0 2px 10px rgba(0,0,0,0.8);
        }

        .navbar-hidden {
            transform: translateY(-100px);
            transition: transform 0.3s ease;
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

        .movie-card {
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.08);
            background: linear-gradient(145deg, rgba(255,255,255,0.02), rgba(0,0,0,0.3));
            transition: all 0.3s ease;
        }

        .movie-card:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 35px 60px -12px rgba(0,0,0,0.6);
            border-color: rgba(154,186,255,0.3);
        }

        /* Optional dark scrollbar */
        body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #4b5563;
            border-radius: 4px;
        }
    </style>

    @stack('styles')
</head>
<body class="pt-0">
    @include('components.navbar')
    @include('components.sidebar')

    <main class="max-w-screen-2xl mx-auto px-4">
        @yield('content')
    </main>

    @stack('modals')

    <script>
        // Lucide icons
        lucide.createIcons();

        // Slider auto-play logic
        const slides = document.querySelectorAll('[id^="slide-"]');
        const indicators = document.querySelectorAll('[id^="indicator-"]');
        const navbar = document.getElementById('navbar');
        let currentIndex = 0;
        const total = slides.length;
        let autoSlideInterval;

        function updateSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('opacity-100', i === index);
                slide.classList.toggle('opacity-0', i !== index);
                slide.style.zIndex = i === index ? '2' : '1';
            });
            currentIndex = index;
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('bg-[#9ABAFF]', i === currentIndex);
                indicator.classList.toggle('bg-white/30', i !== currentIndex);
            });
        }

        function nextSlide() {
            updateSlide((currentIndex + 1) % total);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                stopAutoSlide();
                updateSlide(index);
                setTimeout(startAutoSlide, 3000);
            });
        });

        document.querySelector('section.banner-section')?.addEventListener('mouseenter', stopAutoSlide);
        document.querySelector('section.banner-section')?.addEventListener('mouseleave', startAutoSlide);
        startAutoSlide();

        // Navbar scroll hide
        let lastScrollY = window.scrollY;
        function handleScroll() {
            const currentScrollY = window.scrollY;
            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                navbar?.classList.add('navbar-hidden');
            } else {
                navbar?.classList.remove('navbar-hidden');
            }
            lastScrollY = currentScrollY;
        }
        window.addEventListener('scroll', handleScroll);

        // Genre filter
        document.getElementById('genreFilter')?.addEventListener('change', function () {
            const selectedGenre = this.value;
            const movies = document.querySelectorAll('.movie-link');
            movies.forEach(movie => {
                const genre = movie.getAttribute('data-genre');
                movie.style.display = (selectedGenre === 'all' || genre === selectedGenre) ? 'block' : 'none';
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
