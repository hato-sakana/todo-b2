@extends('layouts.app_original') 
@section('content') 

<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                   <div class="show-pic">
                    <img src="https://media.istockphoto.com/id/1432896630/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E6%B4%8B%E4%B8%8A%E9%A2%A8%E5%8A%9B%E7%99%BA%E9%9B%BB%E6%89%80%E3%81%AE%E9%A2%A8%E5%8A%9B%E3%82%BF%E3%83%BC%E3%83%93%E3%83%B3%E7%99%BA%E9%9B%BB.jpg?b=1&s=170667a&w=0&k=20&c=p2M0tT_gXH6WHz1sj5FRqhQmfD5SDrJVtTLiJhau_u4=" class="card-img-top" alt="...">
                    <h5 class="show-title">{{ $post->title }}</h5>
                   </div>
                </div>
                <div class="card-body">
                <p class="card-text">内容：{{ $post->body }}</p>
                <p>投稿日時：{{ $post->created_at }}</p>
                <div class="twoBtn">
                <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">edit</a>
                <form action='{{ route('posts.destroy',$post->id) }}' method='post'>
                    @csrf
                    @method('delete')
                    <input type='submit' value='delete' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                </form>
                </div> 
                {{-- ボタンを横並びに --}}
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
              <button type="button" class="btn btn-primary" onclick="location.href='{{ route('comments.create',$post->id) }}'">comment</button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 mt-5">
        コメント一覧
        @foreach($post->comments as $comment)
          <div class="card mt-3">
              <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
              <div class="card-body">
                  <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                  <p class="card-text">内容：{{ $comment->body }}</p>
              </div>
          </div>
        @endforeach
      </div>
    </div>
</div>
@endsection
