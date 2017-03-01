@extends('layouts.main')
@section('title', 'Home')

@section('head')
<link href="{{ URL::asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="main-container">
  <section class="parallax">
    <div id="particles-js"></div>
    <div class="container v-align main-content">
      <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-2">
          <h3 class="brand muli-regular">Computer Science @ Kansas State</h3>
        </div>
      </div>
      <form method="POST" action="{{ url('/add') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" class="form-control name-box" placeholder="Enter your name">
          <div class="row text-center buttons">
            <button class="btn btn-lg btn-filled btn-primary" id="register" disabled="disabled" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </div>

@endsection

@section('footer')

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
