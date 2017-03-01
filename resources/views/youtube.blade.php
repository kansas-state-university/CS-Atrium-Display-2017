@extends('layouts.youtube')
@section('title', 'Youtube')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/youtube.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
@endsection

@section('content')
<div class="titles">
  <h1>Kansas State University</h1>
  <h2>Computer Science Department</h2>
  <p class="typer-title">
      Enter your name: <span class="typer" id="some-id" data-delay="70" data-delim=":" data-words="{{$string}}"
      data-colors="white"></span>
      <span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span>
    </p>
</div>

<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'body',autoPlay:true,  loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>



@endsection

@section('footer')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/typer.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script>
    var myPlayer;
    jQuery(function () {

        myPlayer = jQuery(".player").YTPlayer();
    });
</script>



@endsection
