@extends('layouts.youtube')
@section('title', 'Youtube')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/youtube.css') }}" media="all" rel="stylesheet" type="text/css">

@endsection

@section('content')


<body>
<div id="wrapper">
  <div id="customElement">
      <div id="testText">
          <h1>Kansas State University</h1>
          <h2>Computer Science Department
      </div>
  </div>
</div>

<div id="video" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'#customElement', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, addRaster:true, quality:'hd1080'}"></div> <!--BsekcY04xvQ-->




@endsection

@section('footer')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script>
    var myPlayer;
    jQuery(function () {

        myPlayer = jQuery(".player").YTPlayer();
    });
</script>



@endsection
