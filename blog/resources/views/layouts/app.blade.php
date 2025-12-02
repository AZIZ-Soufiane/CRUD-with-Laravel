<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div id="app">

        {{-- Navbar --}}
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

                {{-- Brand --}}
                <a href="{{ url('/') }}" class="text-lg font-semibold">
                    {{ config('app.name', 'Laravel') }}
                </a>

                {{-- Mobile Menu Button --}}
                <button
                    class="md:hidden text-gray-600 hover:text-gray-800 focus:outline-none"
                    onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                {{-- Desktop Menu --}}
                <ul class="hidden md:flex space-x-6">
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}"
                                   class="text-gray-700 hover:text-indigo-600 transition">
                                    {{ __('Login') }}
                                </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"
                                   class="text-gray-700 hover:text-indigo-600 transition">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @else
                        {{-- User Dropdown --}}
                        <li class="relative group">
                            <button class="flex items-center space-x-1 text-gray-700 hover:text-indigo-600">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"/>
                                </svg>
                            </button>

                            <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-md
                                        opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                                <a href="{{ route('logout') }}"
                                   class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>

            {{-- Mobile Menu --}}
            <div id="mobileMenu" class="md:hidden hidden border-t bg-white">
                <ul class="px-4 py-3 space-y-2">

                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}"
                                   class="block text-gray-700 hover:text-indigo-600">
                                    {{ __('Login') }}
                                </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"
                                   class="block text-gray-700 hover:text-indigo-600">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="border-t pt-3">
                            <span class="block text-gray-800 font-semibold">
                                {{ Auth::user()->name }}
                            </span>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                               class="block text-gray-700 hover:text-indigo-600"
                               onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>

        {{-- Main Content --}}
        <main class="py-6">
            @yield('content')
        </main>

    </div>
</body>
</html>
