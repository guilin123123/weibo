@extends('layouts.default')
@section('content')
<div class="offset-md-2 col=md-8">
  <h2 class="mb-4 text-center">所有用户</h2>
  <div class="list-group list-group-flush">
    @foreach($users as $user)
    @include('users._user')
    @endforeach
  </div>
</div>
<div class="mt-3 offset-md-2">
  {{$users->links()}}
</div>
@stop
@section('title','用户列表')
