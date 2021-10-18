<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Uiara Franco</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <style>
    body{
      font-size: 1.25rem;
      margin: 0;
      font-family: 'Noto Serif', serif;
    }
    body,h1,h2,h3,time{
      font-family: 'Noto Serif', serif;
    }
    article, body > main{
      margin: auto;
      padding: 0 1em;
      max-width: 720px;
    }
    pre {
      white-space: pre-wrap;
      white-space: -moz-pre-wrap;
      white-space: -o-pre-wrap;
      word-wrap: break-word;
      font-family: 'Lato', serif;
    }
  </style>
  @yield('head')
</head>
<body>
@include('components.main-header')
@yield('body')
</body>
</html>
@yield('script')
