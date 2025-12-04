@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-50 py-12 px-4">
    <div class="max-w-md mx-auto">
        <div class="bg-white shadow-lg rounded-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-8 bg-blue-600">
                <h2 class="text-3xl font-bold text-white text-center">
                    <i class="fas fa-sign-in-alt mr-2"></i> Se connecter
                </h2>
                <p class="text-blue-50 text-center mt-2 text-sm">Accédez à votre compte</p>
            </div>

            <div class="px-6 py-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-6">
                        <label for="email" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-blue-600"></i> {{ __('Adresse Email') }}
                        </label>

                        <input id="email" type="email"
                               class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               @error('email') border-red-500 @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="vous@exemple.com">

                        @error('email')
                            <p class="text-red-600 text-sm mt-2 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-6">
                        <label for="password" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-blue-600"></i> {{ __('Mot de passe') }}
                        </label>

                        <input id="password" type="password"
                               class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                               @error('password') border-red-500 @enderror"
                               name="password" required autocomplete="current-password" placeholder="Entrez votre mot de passe">

                        @error('password')
                            <p class="text-red-600 text-sm mt-2 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <div class="mb-6 flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            <i class="fas fa-check-circle mr-1 text-blue-600"></i> {{ __('Se souvenir de moi') }}
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div class="flex flex-col gap-4">
                        <button type="submit"
                            class="w-full px-4 py-3 bg-blue-600 text-white font-bold rounded-lg shadow-lg hover:bg-blue-700 transition transform hover:scale-105 flex items-center justify-center">
                            <i class="fas fa-sign-in-alt mr-2"></i> {{ __('Se connecter') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-center text-sm text-blue-600 hover:text-blue-800 font-medium"
                               href="{{ route('password.request') }}">
                                <i class="fas fa-redo mr-1"></i> {{ __('Mot de passe oublié ?') }}
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <div class="text-center text-sm text-gray-600">
                                Pas encore de compte ? 
                                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-bold">
                                    S'inscrire <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
