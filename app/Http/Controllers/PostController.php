<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index',['posts'=>$posts]);
    }
    function create()
    {
        return view('posts.create');
    }
    function store(Request $request)
    {
        // dd($request);
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=Auth::id();
        $post->image_at=$request->image_at;
        $post -> save();
        return redirect()->route('posts.index');
    }
    function show($id)
    {
        // dd($id);
        $post = Post::find($id);

        return view('posts.show',['post'=>$post]);
    }
    function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit',['post'=>$post]);
    }
    function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post -> title = $request ->title;
        $post -> body = $request -> body;
        $post -> save();

        return view('posts.show',compact('post'));
    }
    function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();
        return redirect()->route('posts.index');
    }

    // public function upload(Request $request)
    // {
    //     ディレクトリ名
    //     $dir = 'sample';

    //     sampleディレクトリに画像を保存
    //     $request->file('image')->store('public/' . $dir);

    //     return redirect('/');
    // }


}