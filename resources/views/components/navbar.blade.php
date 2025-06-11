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