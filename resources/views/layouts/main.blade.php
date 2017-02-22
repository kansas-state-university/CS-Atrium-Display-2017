<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="The Kansas State University Computer Science Atrium Display for Spring 2017">
  <meta name="author" content="Kyle Eisenbarger">
  <title>K-State Atrium Display | @yield('title')</title>
  <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.ico') }}" />
  <link href="{{ URL::asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ URL::asset('css/styles.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  @yield('head')
</head>

<body>

@yield('content')

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
<script src="{{ URL::asset('js/styles.js') }}"></script>
@yield('footer')
</body>

</html>
