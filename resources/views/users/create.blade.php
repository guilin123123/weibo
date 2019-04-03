@extends('layouts.default')
@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>注册</h5>
      </div>
       <div class="card-body">
         <form action="{{route('users.store')}}" method="post">
          <div class="form-group">
            <label for="">名称</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
          </div>
           <div class="form-group">
             <label for="">邮箱</label>
             <input type="text" name="email" class="form-control" value="{{old('email')}}">
           </div>
           <div class="form-group">
             <label for="">密码</label>
             <input type="password" name="password" class="form-control">
           </div>
           <div class="form-group">
             <label for="">名称</label>
             <input type="password" name="password_confirmation" class="form-control">
           </div>
           {{csrf_field()}}
           <button type="submit" class="btn btn-primary">注册</button>
         </form>
       </div>
    </div>
  </div>
@stop
@section('title','注册')
