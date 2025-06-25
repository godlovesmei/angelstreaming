<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AngelStream - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: #000000;
      font-family: 'Segoe UI', sans-serif;
    }
    .wave-shape {
      border-top-right-radius: 80% 50%;
      border-bottom-right-radius: 80% 50%;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-black">

  <div class="w-full max-w-5xl bg-[#0e0e0e] rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row">

    <!-- Left Side Form -->
    <div class="w-full md:w-1/2 p-10 text-white flex flex-col justify-center">
      <div class="mb-8">
        <span class="inline-block w-4 h-4 bg-[#9ABAFF] rounded-full mb-4"></span>
        <h1 class="text-3xl font-bold text-[#9ABAFF] mb-2">Welcome to <span class="text-white">AngelStream</span></h1>
        <p class="text-sm text-gray-400">Login to continue</p>
      </div>

      <!-- Laravel session status and errors -->
      @if (session('status'))
        <div class="mb-4 text-green-500">
          {{ session('status') }}
        </div>
      @endif

      <!-- Validation Errors -->
      @if ($errors->any())
        <div class="mb-4 text-red-500">
          <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-6">
          <label for="email" class="block text-sm mb-2">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}"
                 class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-[#9ABAFF]"
                 placeholder="you@example.com" required autofocus autocomplete="username" />
        </div>

        <div class="mb-6">
          <label for="password" class="block text-sm mb-2">Password</label>
          <input type="password" id="password" name="password"
                 class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-[#9ABAFF]"
                 placeholder="••••••••" required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-between mb-6">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
                   class="rounded bg-gray-900 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
            <span class="ml-2 text-sm text-gray-400">Remember me</span>
          </label>
          @if (Route::has('password.request'))
            <a class="text-sm text-[#9ABAFF] hover:underline" href="{{ route('password.request') }}">
              Forgot your password?
            </a>
          @endif
        </div>

        <button type="submit"
                class="w-full py-3 bg-[#9ABAFF] text-black rounded-md font-semibold hover:bg-[#7a98ff] transition duration-300">
          Login
        </button>

        <p class="text-sm text-gray-400 text-center mt-4">
          Don’t have an account?
          <a href="{{ route('register') }}" class="text-[#9ABAFF] hover:underline">Sign up</a>
        </p>
      </form>
    </div>

    <!-- Right Side Illustration -->
    <div class="hidden md:block md:w-1/2 relative bg-[#111111] wave-shape">
      <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzN1czBtZnZha2tvMjMzbGtsZjRjcXlhNDM2OTFvcDg0aDdzZWx6byZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/v0VoVGS0KrJZf1Yz6L/giphy.gif" alt="Illustration" class="w-full h-full object-cover opacity-90">
    </div>

  </div>
</body>
</html>
