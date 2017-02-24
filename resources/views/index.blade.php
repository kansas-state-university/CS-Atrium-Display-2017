@extends('layouts.main')
@section('title', 'Home')

@section('content')

@if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ Session::get('success') }}
      </div>
    @endif

<div class="main-container">
    <section class="cover fullscreen parallax overlay image-bg">
      <!-- <ul class="slides"> -->
      <!-- <li class="overlay image-bg"> -->
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
                <button class="btn btn-lg btn-filled btn-primary" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      <!-- </li> -->
      <!-- </ul> -->
    </section>
@endsection
@section('footer')

@endsection
