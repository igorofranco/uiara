<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Uiara Franco Podcast</title>
  <style>
    body{
      font-size: 1.5em;
    }
    main,section{
      max-width: 1200px;
      margin: auto;
    }
    label{
      display: block;
      margin: 2rem 0;
    }
    input,button{
      font-size: 1.5rem;
    }
    label > input{
      width: 30rem;
    }
  </style>
  @yield('head')
</head>
<body>
<header>
  <a href="{{route('home')}}">
    HOME
  </a>
  <a href="{{route('podcast.home')}}">
    PODCAST
  </a>
</header>
<hr>

@yield('body')
</body>
</html>
@yield('script')
