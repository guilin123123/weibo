@extends('layouts.default')
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>密码重置</h5>
    </div>
    <div class="card-body">
      @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
      @endif
      <form action="{{route('password.email')}}" method="post">
        <div class="form-group{{$errors->has('email') ? has-error : '' }}">
          <label for="email" class="form-control-label">邮箱</label>
          <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" required>
          @if($errors->has('email'))
          <span class="form-text">
            <strong>{{$errors->first('email')}}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          {{csrf_field()}}
          <button type="submit" class="btn btn-primary">发送重置密码邮件</button>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
@section('title','密码重置')
