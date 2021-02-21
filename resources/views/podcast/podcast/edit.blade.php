@extends('podcast.layout')

@section('head')
@endsection

@section('body')
  <main>
    <h1>Editar Podcast</h1>
    <hr>
    <form action="{{route('podcast.update',['podcast'=>$podcast])}}" method="post" autocomplete="off">
      @csrf

      <label for="title">
        <div>Título</div>
        <input type="text" name="title" id="title" required value="{{$podcast->title}}">
      </label>

      <label for="description">
        <div>Descrição</div>
        <input type="text" name="description" id="description" required value="{{$podcast->description}}">
      </label>

      <label for="category">
        <div>Categoria</div>
        <input type="text" name="category" id="category" required value="{{$podcast->category}}">
      </label>

      <label for="keywords">
        <div>Palavras Chave</div>
        <input type="text" name="keywords" id="keywords" required value="{{$podcast->keywords}}">
      </label>

      <label for="owner_name">
        <div>Autoria</div>
        <input type="text" name="owner_name" id="owner_name" required value="{{$podcast->owner_name}}">
      </label>

      <label for="owner_email">
        <div>Email</div>
        <input type="email" name="owner_email" id="owner_email" required value="{{$podcast->owner_email}}">
      </label>

      <button>
        Atualizar
      </button>
    </form>
  </main>
@endsection
