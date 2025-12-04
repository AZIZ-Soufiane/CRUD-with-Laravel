@csrf

<div class="mb-6">
  <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Titre <span class="text-red-500">*</span></label>
  <input id="title" name="title" type="text" value="{{ old('title', $article->title ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Entrez le titre de l'article">
  @error('title') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-6">
  <label for="slug" class="block text-sm font-bold text-gray-700 mb-2">Slug</label>
  <input id="slug" name="slug" type="text" value="{{ old('slug', $article->slug ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Auto-généré si vide">
  @error('slug') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-6">
  <label for="excerpt" class="block text-sm font-bold text-gray-700 mb-2">Extrait</label>
  <input id="excerpt" name="excerpt" type="text" value="{{ old('excerpt', $article->excerpt ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Courte description de l'article">
  @error('excerpt') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-6">
  <label for="content" class="block text-sm font-bold text-gray-700 mb-2">Contenu <span class="text-red-500">*</span></label>
  <textarea id="content" name="content" rows="10" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Écrivez le contenu de votre article...">{{ old('content', $article->content ?? '') }}</textarea>
  @error('content') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
</div>