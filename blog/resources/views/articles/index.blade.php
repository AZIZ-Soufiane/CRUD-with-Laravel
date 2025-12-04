@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-50 py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-5xl font-bold text-gray-900 mb-2">Articles</h1>
                <p class="text-gray-600">Gérez tous vos articles en un seul endroit</p>
            </div>
            <a href="{{ route('articles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-lg hover:shadow-xl transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i> Nouvel article
            </a>
        </div>

        @if(session('status'))
            <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                    <span>{{ session('status') }}</span>
                </div>
            </div>
        @endif

        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-100">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-blue-600 to-blue-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-bold text-white">Titre</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-white">Slug</th>
                        <th class="px-6 py-3 text-left text-sm font-bold text-white">Créé</th>
                        <th class="px-6 py-3 text-center text-sm font-bold text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($articles as $article)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $article->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $article->slug }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $article->created_at->format('d M, Y') }}</td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <a href="{{ route('articles.edit', $article) }}" class="bg-amber-500 hover:bg-amber-600 text-white py-2 px-4 rounded text-sm transition inline-block font-medium shadow hover:shadow-lg"><i class="fas fa-pen mr-1"></i> Modifier</a>
                                <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded text-sm transition font-medium shadow hover:shadow-lg" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')"><i class="fas fa-trash mr-1"></i> Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-6 py-12 text-center">
                            <div class="text-gray-500">
                                <p class="text-lg font-medium mb-2"><i class="fas fa-file-alt mr-2"></i> Aucun article disponible</p>
                                <p class="text-sm">Créez votre premier article pour commencer</p>
                            </div>
                        </td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection