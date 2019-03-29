@extends('layouts.default')
@section('content')
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
    你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a>的实例主页
  </p>
  <p>
    一切将从这开始
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{route('signUp')}}" role="button">现在注册</a>
  </p>
</div>
@stop
@section('title','主页')
