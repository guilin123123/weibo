@extends('layouts.default')
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>更新个人资料</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')
      <div class="gravatar_edit">
        <a href="http://gravatar.com/emails" target="_blank">
          <img src="{{$user->gravatar('200')}}" alt="{{$user->name}}" class="gravatar">
        </a>
      </div>
      <form action="{{route('users.update',$user->id)}}" method="post">
        <div class="form-group">
          <label for="">名称</label>
          <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label for="">邮箱</label>
          <input type="text" name="email" class="form-control" value="{{$user->email}}"disabled>
        </div>
        <div class="form-group">
          <label for="">密码</label>
          <input type="password" name="password" class="form-control" value="{{$user->password}}">
        </div>
        <div class="form-group">
          <label for="">确认密码</label>
          <input type="password"  name="password_confirmation" class="form-control">
        </div>
        {{csrf_field()}}
        {{method_field('PUT')}}
        <button type="submit" class="btn btn-block btn-warning">编辑</button>
      </form>
    </div>
  </div>
</div>
@stop
@section('title','更新个人资料')
