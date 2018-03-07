@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">

        <div class="blog-post">
            <a href="/posts/{{ $post->id }}">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
            </a>

            <p class="blog-post-meta">
                @if(count($post->tags))
                    @foreach($post->tags as $tag)
                        <li>
                            <a href="/posts/tags/{{$tag->name}}">
                                {{ $tag->name }}
                            </a>
                        </li>
                    @endforeach
                @endif
                {{ $post->created_at->toFormattedDateString() }}
            </p>

            {{ $post->body }}
        </div><!-- /.blog-post -->
        <hr>
        <div class="comments">
            @foreach ($post->comments as $comment)
                <div class="article">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong> {{ $comment->created_at->diffForHumans() }}</strong>
                            &nbsp {{ $comment->body }}
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="card">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" cols="30" class="form-control" placeholder="Your comment here"></textarea>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Add Comment
                        </button>
                    </div>
                </form>
                @include('layouts/errors')
            </div>
        </div>
    </div><!-- /.blog-main -->
@endsection

