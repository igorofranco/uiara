@extends('podcast.layout')

@section('head')
@endsection

@section('body')
  <main>
    <form action="{{route('epi.store')}}" method="post" autocomplete="off">
      @csrf

      <label for="title">
        <div>Título</div>
        <input type="text" name="title" id="title" required maxlength="255">
      </label>

      <label for="description">
        <div>Descrição</div>
        <input type="text" name="description" id="description" required maxlength="1024">
      </label>

      <label for="keywords">
        <div>Palavras Chave</div>
        <input type="text" name="keywords" id="keywords" required maxlength="255">
      </label>

      <label for="publish_datetime">
        <div>Data/Hora da publicação</div>
        <input type="text" name="publish_datetime" id="publish_datetime" required maxlength="255">
      </label>

      <label for="img_uri">
        <div>URL da Imagem</div>
        <input type="text" name="img_uri" id="img_uri" required maxlength="255">
      </label>

      <label for="mp3_uri">
        <div>URL do Áudio (mp3)</div>
        <input type="text" name="mp3_uri" id="mp3_uri" required maxlength="255">
      </label>

      <label for="explicit">
        <div>Conteúdo Explícito</div>
        <input type="text" name="explicit" id="explicit" placeholder="YES / NO" value="NO" required maxlength="255">
      </label>

      <button>
        Criar Episódio
      </button>
    </form>
  </main>
@endsection
