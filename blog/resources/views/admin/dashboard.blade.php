@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-50 py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-2">Tableau de bord administrateur</h1>
            <p class="text-gray-600 text-lg">Gérez votre blog et son contenu</p>
        </div>

        <!-- Welcome Card -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg shadow-lg p-8 mb-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2"><i class="fas fa-hand-wave mr-2"></i> Bienvenue !</h2>
                    @auth
                        <p class="text-blue-100 text-lg">Connecté en tant que <strong>{{ Auth::user()->name }}</strong></p>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Articles Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-600 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium mb-1">Articles publiés</p>
                        <p class="text-4xl font-bold text-gray-900">{{ \App\Models\Article::count() }}</p>
                    </div>
                    <div class="text-5xl text-blue-600"><i class="fas fa-file-alt"></i></div>
                </div>
                <a href="{{ route('articles.index') }}" class="text-blue-600 hover:text-blue-700 text-sm font-medium mt-4 block">Voir tous les articles <i class="fas fa-arrow-right ml-1"></i></a>
            </div>

            <!-- Users Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-600 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium mb-1">Utilisateurs</p>
                        <p class="text-4xl font-bold text-gray-900">{{ \App\Models\User::count() }}</p>
                    </div>
                    <div class="text-5xl text-green-600"><i class="fas fa-users"></i></div>
                </div>
                <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium mt-4 block">Gérer les utilisateurs <i class="fas fa-arrow-right ml-1"></i></a>
            </div>

            <!-- Settings Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-600 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium mb-1">Paramètres</p>
                        <p class="text-2xl font-bold text-gray-900"><i class="fas fa-cog"></i></p>
                    </div>
                    <div class="text-5xl text-purple-600"><i class="fas fa-tools"></i></div>
                </div>
                <a href="#" class="text-purple-600 hover:text-purple-700 text-sm font-medium mt-4 block">Configurer <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>

        <!-- Actions -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Actions rapides</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="{{ route('articles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-lg hover:shadow-xl block text-center"><i class="fas fa-plus mr-2"></i> Créer un nouvel article</a>
                <a href="{{ route('articles.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-lg hover:shadow-xl block text-center"><i class="fas fa-list mr-2"></i> Voir tous les articles</a>
            </div>
        </div>
    </div>
</div>
@endsection