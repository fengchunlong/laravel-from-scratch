@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">
    <h1>Publish a post</h1>
    @include('layouts/errors')
    <form class="form-horizontal" method="post" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="请输入标题" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label" >内容</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="6" name="body"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div><!-- /.blog-main -->
@endsection