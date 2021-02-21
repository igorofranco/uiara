@extends('podcast.layout')

@section('head')
@endsection

@section('body')
  <main>
    <form action="{{route('epi.update',['epi'=>$epi])}}" method="post" autocomplete="off">
      @csrf
      <label for="title">
        <div>Título</div>
        <input type="text" name="title" id="title" required value="{{$epi->title}}" maxlength="255">
      </label>

      <label for="description">
        <div>Descrição</div>
        <input type="text" name="description" id="description" required value="{{$epi->description}}" maxlength="1024">
      </label>

      <label for="keywords">
        <div>Palavras Chave</div>
        <input type="text" name="keywords" id="keywords" required value="{{$epi->keywords}}" maxlength="255">
      </label>

      <label for="publish_datetime">
        <div>Data/Hora da publicação</div>
        <input type="text" name="publish_datetime" id="publish_datetime" required value="{{$epi->publish_datetime}}">
      </label>

      <label for="img_uri">
        <div>URL da Imagem</div>
        <input type="text" name="img_uri" id="img_uri" required value="{{$epi->img_uri}}" maxlength="255">
      </label>

      <label for="mp3_uri">
        <div>URL do Áudio (mp3)</div>
        <input type="text" name="mp3_uri" id="mp3_uri" required value="{{$epi->mp3_uri}}" maxlength="255">
      </label>

      <label for="explicit">
        <div>Conteúdo Explícito</div>
        <input type="text" name="explicit" id="explicit" placeholder="YES / NO" value="NO" required value="{{$epi->explicit}}" maxlength="255">
      </label>

      <button>
        Atualizar
      </button>
    </form>
  </main>
@endsection
