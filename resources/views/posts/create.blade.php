@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            
              <div class="form-group">
                  <label>タイトル</label>
                  <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
              </div>
              <div class="form-group">
                  <label>内容</label>
                  <textarea class="form-control" placeholder="内容" rows="5" name="body">
                  </textarea>
              </div>
              <form action="{{ route('add_image') }}" enctype='multipart/form-data' method="post"> 
                @csrf 
                    <input type="file" name="image_at">  
                    <input type="submit" value="写真を登録する"> 
              <button type="submit" class="btn btn-primary">作成</button>
          </form>
      </div>
  </div>
</div>
@endsection