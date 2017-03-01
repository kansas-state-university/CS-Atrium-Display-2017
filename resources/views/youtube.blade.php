@section('title', 'Youtube')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.css') }}" media="all" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/J4peLBZ6ZCI',containment:'header',autoPlay:true, loop:true, mute:true, showControls:false, quality:'hd1080'}"></div>


@endsection

@section('footer')
<script src="{{ URL::asset('js/jquery.mb.YTPlayer.src.js') }}"></script>
<script>
jQuery(function(){
  jQuery("#bgndVideo").YTPlayer();
});
</script>
@endsection
