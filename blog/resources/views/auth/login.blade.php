@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">{{ __('Login') }}</h2>
        </div>

        <div class="px-6 py-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block font-medium text-sm text-gray-700 mb-1">
                        {{ __('Email Address') }}
                    </label>

                    <input id="email" type="email"
                           class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                           @error('email') border-red-500 @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <p class="text-red-600 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label for="password" class="block font-medium text-sm text-gray-700 mb-1">
                        {{ __('Password') }}
                    </label>

                    <input id="password" type="password"
                           class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                           @error('password') border-red-500 @enderror"
                           name="password" required autocomplete="current-password">

                    @error('password')
                        <p class="text-red-600 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                {{-- Submit --}}
                <div class="flex items-center justify-start gap-4">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 transition">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:text-indigo-800"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
