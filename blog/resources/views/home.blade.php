@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">
                {{ __('Dashboard') }}
            </h2>
        </div>

        <div class="px-6 py-6">

            {{-- Success Alert --}}
            @if (session('status'))
                <div class="mb-4 bg-green-100 text-green-800 border border-green-300 px-4 py-3 rounded-md">
                    {{ session('status') }}
                </div>
            @endif

            <p>{{ __('You are logged in!') }}</p>
        </div>
    </div>
</div>
@endsection
