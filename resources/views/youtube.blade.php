@extends('layouts.youtube')
@section('title', 'Youtube')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/youtube.css') }}" media="all" rel="stylesheet" type="text/css">

@endsection

@section('content')
<h1>Kansas State University</h1>
<h2>Computer Science Department</h2>
<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'body',autoPlay:true, loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>
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
