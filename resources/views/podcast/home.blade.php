@extends('podcast.layout')

@section('head')
  <style>
    img{
      max-width: 256px;
    }
  </style>
@endsection

@section('body')
  @if(isset($podcast))
    <section>
      <h1>{{$podcast->title}}</h1>
      <div>
        <img src="../podcast-media/{{$podcast->img_uri}}" alt="">
      </div>
      <p>{{$podcast->description}}</p>
      @auth
        <a href="{{route('podcast.edit',['podcast'=>1])}}">
          Editar
        </a>
      @endauth
    </section>

    <section>
      <h2>Episódios</h2>
      @auth
        <a href="{{route('epi.create')}}">
          + Epi
        </a>
      @endauth
      @foreach($podcast->episodes as $epi)
        <a href="{{route('epi.show',['epi'=>$epi])}}">
          <div>
            {{$epi->title}}
          </div>
        </a>
      @endforeach
    </section>


  @endif
@endsection
