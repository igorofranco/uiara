@extends('article.components.layout')

@section('title')
  {{ $article->title }}
@endsection

@section('head')
@endsection

@section('body')
  <article>
    <header>
      <h1>{{ $article->title }}</h1>
      <div>
        Uiara Franco
      </div>
      <time>
        {{ date('d/m/Y') }}
      </time>
    </header>
    <main>
      <pre>{{ $article->text }}</pre>
    </main>
  </article>
@endsection

@section('script')
@endsection
