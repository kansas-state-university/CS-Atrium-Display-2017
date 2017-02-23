@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="main-container">
    <section class="cover fullscreen image-slider slider-arrow-controls controls-inside parallax overlay image-bg">
      <!-- <ul class="slides"> -->
      <!-- <li class="overlay image-bg"> -->
      <div id="particles-js"></div>
      <div class="background-image-holder">
        <img alt="image" class="background-image" src="img/dot_bg.jpg">
      </div>
      <div class="container v-align main-content">
        <div class="row text-center">
          <img alt="Logo" class="logo" src="img/LogoWhiteHorizontal.svg">
        </div>
        <div class="row text-center">
          <div class="col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
            <h3 class="brand muli-regular">Please enter your name!</h3>
          </div>
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
