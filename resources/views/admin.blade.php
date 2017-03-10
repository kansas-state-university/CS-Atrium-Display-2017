@extends('layouts.youtube')
@section('title', 'Winner')

@section('head')
<link href="{{ URL::asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/admin.css') }}" media="all" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container">
    <div class="row">
        @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session('flash_notification.message') !!}
        </div>
        @endif
    </div>
</div>


<div class="container">
    <div class="row">
  <h2 class="text-center">Admin Dashboard</h2>
  <div class="col-md-12 text-center">
  <a href="{{ url('/admin' ) }}"><button class="purple-btn btn btn-lg">Refresh</button></a>
  </div>
  </div>

  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th class="text-center">Name</th>
        <th class="text-center">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td class="text-center">{{ $user->name }}</td>
        <form method="POST" action="{{ url('/delete/'.$user->id) }}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <td class="text-center"><button type="submit" class="btn btn-danger btn-sm" id="{{ $user->id }}" onclick="return confirm('Are you sure you want to delete @if($user != ""){!! $user->name !!}@endif ?');">Delete Name</button></td>
            </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <div class="text-right">
  <ul class="pagination">
  <li <?php if($users->previousPageUrl() == null) { echo "class=disabled"; }?>><a href="{{$users->previousPageUrl()}}">Prev</a></li>
  <li <?php if($users->nextPageUrl() == null) { echo "class=disabled"; }?>><a href="{{$users->nextPageUrl()}}">Next</a></li>
</ul>
</div>
</div>

@endsection

@section('footer')


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<script>
$('div.success').not('.success-important').delay(3000).fadeOut(350);
</script>
@endsection
