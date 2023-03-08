@extends('layouts.app_original')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        投稿一覧
                    </div>
                    @foreach ($posts as $post)
                    <img src={{ $post->imege_at }} alt="">
                        <div class="card-body">
                            <h5 class="card-title">タイトル : {{ $post->title }}</h5>
                            <p class="card-text">
                                内容 : {{ $post->body }}
                            </p>
                            <p class="card-text">投稿者:{{ $post->user->name }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">details</a>
                        </div>
                        <div class="card-footer text-muted">
                            投稿日時 : {{ $post->created_at }}
                        </div>

                        {{ $post->image_at }}
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    new post
                </a>
            </div>
        </div>
    </div>
@endsection
