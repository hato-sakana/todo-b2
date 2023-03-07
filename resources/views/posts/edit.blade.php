@extends('layouts.app_original')
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{ route('posts.update',$post->id) }}" method="POST">
            @csrf
            @method('put')
              <div class="form-group">
                  {{-- <label>タイトル</label> --}}
                  <img src="https://media.istockphoto.com/id/1432896630/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E6%B4%8B%E4%B8%8A%E9%A2%A8%E5%8A%9B%E7%99%BA%E9%9B%BB%E6%89%80%E3%81%AE%E9%A2%A8%E5%8A%9B%E3%82%BF%E3%83%BC%E3%83%93%E3%83%B3%E7%99%BA%E9%9B%BB.jpg?b=1&s=170667a&w=0&k=20&c=p2M0tT_gXH6WHz1sj5FRqhQmfD5SDrJVtTLiJhau_u4=" class="card-img-top" alt="...">
              </div>
              <div class="form-group">
                  <label>タイトル</label>
                  <input type="text" class="form-control" value="{{ $post->title }}" name="title">
              </div>
              <div class="form-group">
                  <label>内容</label>
                  <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">更新する</button>
          </form>
      </div>
  </div>
</div>
@endsection