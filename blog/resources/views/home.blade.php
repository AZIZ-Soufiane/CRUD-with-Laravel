@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg border border-gray-100">
        <div class="px-6 py-4 border-b bg-gradient-to-r from-blue-50 to-indigo-50">
            <h2 class="text-xl font-bold text-gray-900">
                <i class="fas fa-tachometer-alt mr-2 text-blue-600"></i> {{ __('Dashboard') }}
            </h2>
        </div>

        <div class="px-6 py-6">

            {{-- Success Alert --}}
            @if (session('status'))
                <div class="mb-4 bg-green-50 text-green-800 border-l-4 border-green-500 px-4 py-3 rounded-lg flex items-center">
                    <i class="fas fa-check-circle mr-3 text-green-600"></i>
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-blue-50 rounded-lg p-6 border border-blue-200">
                <p class="text-gray-700"><i class="fas fa-check-circle text-green-600 mr-2"></i> {{ __('You are logged in!') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
