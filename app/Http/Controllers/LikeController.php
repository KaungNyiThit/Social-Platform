<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
    public function store($id){
        $post = Post::findOrFail($id);

        $alreadyLiked = $post->likes()->where('user_id', auth()->id())->exists();

        if($alreadyLiked){
            return back()->with('error', 'You already liked this post');
        }
        $like = new Like();
        $like->user_id = auth()->id();
        $like->post_id = $post->id;
        $like->save();
        return back()->with('success', 'Post liked');
    }


}
