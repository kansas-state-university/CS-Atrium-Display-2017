@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="main-container">
    <section class="cover fullscreen parallax overlay">
      <!-- <ul class="slides"> -->
      <!-- <li class="overlay image-bg"> -->
      <div id="particles-js"></div>

      <div class="container v-align main-content">
        <div class="row text-center">
          <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-2">
            <h3 class="brand muli-regular">Please enter your name!</h3>
          </div>
          <input type="text" class="form-control" placeholder="Text input">
        </div>
        <div class="row text-center buttons">
          <a class="btn btn-lg btn-filled" href="#">Submit</a>
        </div>
      </div>
      <!-- </li> -->
      <!-- </ul> -->
    </section>
@endsection
@section('footer')

@endsection
