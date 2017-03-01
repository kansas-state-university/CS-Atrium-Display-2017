@extends('layouts.youtube')
@section('title', 'Atrium Display')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/youtube.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
@endsection
@section('content')

<section class="section top">
<div class="titles">
  <h1>Kansas State University</h1>
  <h2>Computer Science Department</h2>
  <div class="col-lg-8 col-lg-offset-2">
    <p class="drawing-title">
      Enter The Drawing
    </p>
    <p class="typer-title">
      <span class="typer" id="some-id" data-delay="70" data-delim=":" data-words="{{$string}}"
      data-colors="white"></span>
      <span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span>
    </p>
  </div>
</div>

<div class="container ">
  <div class="row text-center">
    <div class="col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-2 col-md-6 col-md-offset-3">

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
</section>



<section class="section">
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
</section>



<a class="big-link" href="#">
  <div class="arrow animated bounce">
    <img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
  </div></a>





  <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'body',autoPlay:true, loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>
  @endsection
  @section('footer')
  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/typer.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<script>

$(window).scroll(function(){
    $(".top").css("opacity", 1 - $(window).scrollTop() / 250);
  });
</script>


  <script>
  $(window).scroll(function() {

    if ($(this).scrollTop()>100)
    {
      $('.arrow').fadeOut();
    }
    else
    {
      $('.arrow').fadeIn();
    }
  });
  </script>


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
