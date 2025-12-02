@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">{{ __('Confirm Password') }}</h2>
        </div>

        <div class="px-6 py-6 space-y-4">

            <p>{{ __('Please confirm your password before continuing.') }}</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

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
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Buttons --}}
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 transition">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-sm text-indigo-600 hover:text-indigo-800 underline">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
