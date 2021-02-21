@extends('podcast.layout')

@section('head')
@endsection

@section('body')
  <main>
    <h1>Criar Podcast</h1>
    <hr>
    <form action="{{route('podcast.store')}}" method="post" autocomplete="off">
      @csrf

      <label for="title">
        <div>Título</div>
        <input type="text" name="title" id="title" required>
      </label>

      <label for="description">
        <div>Descrição</div>
        <input type="text" name="description" id="description" required>
      </label>

      <label for="category">
        <div>Categoria</div>
        <input type="text" name="category" id="category" required>
      </label>

      <label for="keywords">
        <div>Palavras Chave</div>
        <input type="text" name="keywords" id="keywords" placeholder="separe os termos, por, vírgula" required>
      </label>

      <label for="owner_name">
        <div>Autoria</div>
        <input type="text" name="owner_name" id="owner_name" placeholder="seu nome" required>
      </label>

      <label for="owner_email">
        <div>Email</div>
        <input type="email" name="owner_email" id="owner_email" required>
      </label>

      <button>
        Criar
      </button>
    </form>
  </main>
@endsection
