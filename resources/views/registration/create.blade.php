@extends('layouts.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>注册</h1>
        <form action="register" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable for="name">姓名：</lable>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <lable for="email">邮箱：</lable>
                <input type="text" name="email" class="form-control" >
            </div>
            <div class="form-group">
                <lable for="email">密码：</lable>
                <input type="password" name="password" class="form-control" >
            </div>
            <div class="form-group">
                <lable for="email">确认密码：</lable>
                <input type="password" name="password_confirmation" class="form-control" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
        @include('layouts/errors')
    </div><!-- /.blog-main -->
@endsection

