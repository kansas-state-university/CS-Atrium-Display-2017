@extends('layouts.youtube')
@section('title', 'Winner')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/winner.css') }}" media="all" rel="stylesheet" type="text/css">

@endsection

@section('content')



<div class="container">
    <img class="fit center" src="{{ URL::asset('img/ticket.png') }}" alt="">
    <a href="{{ url('/' )}}"><button class="center btn btn-lg btn-filled btn-primary" id="register" type="submit">Return</button></a>

</div>

<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'body',autoPlay:true, loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>

@endsection

@section('footer')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>

<script src="{{ URL::asset('js/custom.js') }}"></script>
@endsection
