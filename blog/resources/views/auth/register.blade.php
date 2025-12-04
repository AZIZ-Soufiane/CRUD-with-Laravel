@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-50 py-12 px-4">
    <div class="max-w-md mx-auto">
        <div class="bg-white shadow-lg rounded-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-8 bg-green-600">
                <h2 class="text-3xl font-bold text-white text-center">
                    <i class="fas fa-user-plus mr-2"></i> S'inscrire
                </h2>
                <p class="text-green-50 text-center mt-2 text-sm">Créez votre nouveau compte</p>
            </div>

            <div class="px-6 py-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-6">
                        <label for="name" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-green-600"></i> {{ __('Nom complet') }}
                        </label>

                        <input id="name" type="text"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                            @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Votre nom">

                        @error('name')
                            <p class="text-red-600 text-sm mt-2 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-6">
                        <label for="email" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-green-600"></i> {{ __('Adresse Email') }}
                        </label>

                        <input id="email" type="email"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                            @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="vous@exemple.com">

                        @error('email')
                            <p class="text-red-600 text-sm mt-2 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-6">
                        <label for="password" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-green-600"></i> {{ __('Mot de passe') }}
                        </label>

                        <input id="password" type="password"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                            @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="new-password" placeholder="Min. 8 caractères">

                        @error('password')
                            <p class="text-red-600 text-sm mt-2 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-6">
                        <label for="password-confirm" class="block font-bold text-sm text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-green-600"></i> {{ __('Confirmer le mot de passe') }}
                        </label>

                        <input id="password-confirm" type="password"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez votre mot de passe">
                    </div>

                    {{-- Submit --}}
                    <div class="flex flex-col gap-4">
                        <button type="submit"
                            class="w-full px-4 py-3 bg-green-600 text-white font-bold rounded-lg shadow-lg hover:bg-green-700 transition transform hover:scale-105 flex items-center justify-center">
                            <i class="fas fa-user-plus mr-2"></i> {{ __('S\'inscrire') }}
                        </button>

                        <div class="text-center text-sm text-gray-600">
                            Vous avez déjà un compte ? 
                            <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 font-bold">
                                Se connecter <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
