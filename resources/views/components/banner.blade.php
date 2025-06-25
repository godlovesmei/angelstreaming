<section class="banner-section relative w-full h-screen overflow-hidden">
    <div id="bannerContainer" class="absolute inset-0 flex">
        @foreach($banners as $i => $banner)
        <div class="absolute inset-0 w-full h-full {{ $i === 0 ? 'opacity-100' : 'opacity-0' }} transition-opacity duration-1000" id="slide-{{ $i }}">
            <div class="w-full h-full">
                <img src="{{ $banner['image'] }}" alt="{{ $banner['title'] }}" class="w-full h-full object-cover" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent flex items-center">
                <div class="ml-24 max-w-2xl">
                    <p class="uppercase text-sm text-[#9ABAFF] font-semibold tracking-wider">{{ $banner['category'] }}</p>
                    <h1 class="text-6xl font-bold mt-2 text-[#9ABAFF] banner-text-shadow">{{ $banner['title'] }}</h1>
                    <div class="flex items-center gap-4 mt-4 text-gray-300 banner-text-shadow">
                        <span class="text-lg">{{ $banner['year'] }}</span>
                        <span>•</span>
                        <span>{{ $banner['duration'] }}</span>
                        <span>•</span>
                        <span class="px-3 py-1 border-2 rounded-full border-[#9ABAFF] text-[#9ABAFF] text-sm font-semibold">{{ $banner['genre'] }}</span>
                        <span class="text-yellow-400 text-lg">★ {{ $banner['rating'] }}</span>
                    </div>
                    <p class="mt-6 text-lg leading-relaxed banner-text-shadow text-white">{{ $banner['desc'] }}</p>
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
        @endforeach
    </div>
    <!-- Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-3">
        @foreach($banners as $i => $banner)
        <div id="indicator-{{ $i }}" class="w-3 h-3 rounded-full {{ $i === 0 ? 'bg-[#9ABAFF]' : 'bg-white/30' }} cursor-pointer transition-all duration-300"></div>
        @endforeach
    </div>
</section>
