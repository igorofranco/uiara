@extends('article.components.layout')

@section('head')
@endsection

@section('body')
  <main>
    <h1>Artigos</h1>
    <ul>
      @foreach($articles as $article)
        <li>
          <a href="{{ route('article.show',['slug'=>$article->slug]) }}">
            {{ $article->title }}
          </a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
@endsection
