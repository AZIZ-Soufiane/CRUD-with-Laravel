@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">{{ __('Verify Your Email Address') }}</h2>
        </div>

        <div class="px-6 py-6 space-y-4">

            {{-- Success Message --}}
            @if (session('resent'))
                <div class="bg-green-100 text-green-800 border border-green-300 px-4 py-3 rounded-md">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>

            <p>
                {{ __('If you did not receive the email') }},
                <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                        class="text-indigo-600 hover:text-indigo-800 font-medium underline">
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </p>

        </div>
    </div>
</div>
@endsection
