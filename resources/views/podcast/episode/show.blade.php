@extends('podcast.layout')

@section('head')
  <style>
    img{
      max-width: 300px;
    }
  </style>
@endsection

@section('body')
  <main>
    <h1>
      {{$epi->title}}
    </h1>
    @auth
      <a href="{{route('epi.edit',['epi'=>$epi])}}">
        editar
      </a>
    @endauth
    <div>
      <img src="{{env('APP_URL')}}/podcast-media/{{$epi->img_uri}}" alt="{{$epi->description}}">
    </div>
    <section>
      <p>
        {{$epi->description}}
      </p>
      <p>
        <small>
          {{date('H:i - d/m/y',strtotime($epi->publish_datetime))}}
        </small>
      </p>
      <audio controls>
        <source src="{{env('APP_URL')}}/podcast-media/{{$epi->mp3_uri}}" type="audio/mpeg">
        Áudio indisponível no momento.
      </audio>
    </section>
  </main>
@endsection
