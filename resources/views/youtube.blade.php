@extends('layouts.youtube')
@section('title', 'Atrium Display')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/youtube.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
@endsection
@section('content')

<div class="titles">
  <h1>Kansas State University</h1>
  <h2>Computer Science Department</h2>
  <div class="col-lg-8 col-lg-offset-2">
  <p class="drawing-title">
    Enter the drawing
  </p>
  <p class="typer-title">
    <span class="typer" id="some-id" data-delay="70" data-delim=":" data-words="{{$string}}"
    data-colors="white"></span>
    <span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span>
  </p>
</div>
</div>

<div class="container">
  <div class="row text-center">
    <div class="col-lg-4 col-lg-offset-4">
    <form method="POST" action="{{ url('/add') }}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="name" class="form-control name-box" placeholder="Enter your name" autofocus>
      <div class="row text-center buttons">
        <button class="btn btn-lg btn-filled btn-primary" id="register" disabled="disabled" type="submit">Submit</button>
      </div>
    </form>
  </div>

  </div>
</div>




<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'body',autoPlay:true, loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>
@endsection
@section('footer')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/typer.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script>
var myPlayer;
jQuery(function () {

  myPlayer = jQuery(".player").YTPlayer();
});
</script>

<script>
(function() {
  $('form > input').keyup(function() {

    var empty = false;
    $('form > input').each(function() {
      if ($(this).val() == '') {
        empty = true;
      }
    });

    if (empty) {
      $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    } else {
      $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    }
  });
})()
</script>

@endsection
