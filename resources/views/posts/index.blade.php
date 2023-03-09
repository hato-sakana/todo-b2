@extends('layouts.app_original')
@section('content')
    <div class="container">
        {{-- <div class="row5"> --}}
            @foreach ($posts as $post) 
            <div class="cards-container">
                <img src="https://media.istockphoto.com/id/1432896630/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E6%B4%8B%E4%B8%8A%E9%A2%A8%E5%8A%9B%E7%99%BA%E9%9B%BB%E6%89%80%E3%81%AE%E9%A2%A8%E5%8A%9B%E3%82%BF%E3%83%BC%E3%83%93%E3%83%B3%E7%99%BA%E9%9B%BB.jpg?b=1&s=170667a&w=0&k=20&c=p2M0tT_gXH6WHz1sj5FRqhQmfD5SDrJVtTLiJhau_u4=" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">title:{{ $post->title }}</h5>
                  <p class="card-text">
                    内容 : {{ $post->body }}
                  </p>
                  <p class="card-text">投稿者:{{ $post->user->name }}</p>
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">details</a>
                </div>
                <div class="card-footer text-muted">
                    投稿日時 : {{ $post->created_at }}
                </div>
              </div>
              @endforeach
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    new post
                </a>
            </div>
        {{-- </div> --}}
    </div>
@endsection
