@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-50 py-12 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('articles.index') }}" class="text-blue-600 hover:text-blue-700 mb-4 inline-block"><i class="fas fa-arrow-left mr-2"></i> Retour aux articles</a>
            <h1 class="text-5xl font-bold text-gray-900 mb-2">Modifier l'article</h1>
            <p class="text-gray-600 text-lg">{{ $article->title }}</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg border border-gray-100 p-8">
            <form method="POST" action="{{ route('articles.update', $article) }}" novalidate>
                @method('PUT')
                @include('articles._form', ['article' => $article])
                <div class="mt-8 flex gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition shadow-lg hover:shadow-xl transform hover:scale-105"><i class="fas fa-check mr-2"></i> Mettre à jour</button>
                    <a href="{{ route('articles.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-8 rounded-lg transition"><i class="fas fa-arrow-left mr-2"></i> Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection