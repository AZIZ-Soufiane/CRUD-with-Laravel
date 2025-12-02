@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">{{ __('Reset Password') }}</h2>
        </div>

        <div class="px-6 py-6">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block font-medium text-sm text-gray-700 mb-1">
                        {{ __('Email Address') }}
                    </label>

                    <input id="email" type="email"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                        @error('email') border-red-500 @enderror"
                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
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
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-4">
                    <label for="password-confirm" class="block font-medium text-sm text-gray-700 mb-1">
                        {{ __('Confirm Password') }}
                    </label>

                    <input id="password-confirm" type="password"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                {{-- Submit --}}
                <div class="flex justify-start">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 transition">
                        {{ __('Reset Password') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
