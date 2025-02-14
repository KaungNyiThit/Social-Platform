<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $post = Post::latest()->get();
        return view('posts.index', [
            'posts' => $post
        ] );
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        
        $validator = validator(request()->all(), [
            'content' => 'required',
            'user_id' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $posts = new Post();
        $posts->content = request('content');
        $posts->user_id = auth()->id();

        $posts->save();

        return redirect('/');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post->content = $request->content;
        $post->save();

        return redirect('/');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);

        if($post->user_id == auth()->id()){
            $post->delete();
            return redirect('/');
        }else{
            abort(403, 'Unauthorized action.');
        }
    }
}
