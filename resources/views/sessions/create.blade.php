@extends('layouts.default')
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>登录</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')
      <form action="{{route('login')}}" method="post">
        <div class="form-group">
          <label for="">邮箱</label>
          <input type="text" name="email" class="form-control" value="{{old('email')}}">
        </div>
        <div class="form-group">
          <label for="">密码</label>
          <input type="password" name="password" class="form-control">
        </div>
        {{csrf_field()}}
        <button type="submit" class="btn btn-success">登录</button>
      </form>
      <hr>
      <p>还没账号?<a href="{{route('signUp')}}"> 现在注册!</a></p>
    </div>
  </div>
</div>
@stop
@section('title','用户登录')
