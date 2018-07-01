<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') App</title>
  </head>
  <body>
    @yield('content')
    <br>
    <a href="{{route('home')}}">首页</a>
    <br>
    <a href="{{route('about')}}">关于</a>
    <br>
    <a href="{{route('help')}}">帮助</a>
  </body>
</html>