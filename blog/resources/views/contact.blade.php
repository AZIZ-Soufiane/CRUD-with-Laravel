@extends('layouts.app')

@section('content')
  <div class="card">
    <h2>{{ $title }}</h2>
    <p>Vous pouvez nous contacter via le formulaire ci-dessous :</p>

    <form method="POST" action="#">
      @csrf  {{-- Protection contre les attaques CSRF --}}
      
      <div>
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name" required>
      </div>

      <div>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required>
      </div>

      <div>
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" style="margin-top: 10px;">Envoyer</button>
    </form>
  </div>
@endsection
