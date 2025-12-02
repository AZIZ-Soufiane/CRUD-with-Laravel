@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">{{ __('Reset Password') }}</h2>
        </div>

        <div class="px-6 py-6">

            {{-- Success Alert --}}
            @if (session('status'))
                <div class="mb-4 bg-green-100 text-green-800 border border-green-300 px-4 py-3 rounded-md">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="flex justify-start">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 transition">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
