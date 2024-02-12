<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function create(Request $request){
        $post = new Post();

        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
    
        $post->save();

        return redirect()->route('home');
    }

    public function delete($id) {
		
		// create a variable where we store the id post we want to delete
			$post = Post::find($id);
			$post->delete();

			return redirect()->route('home');
	}
}
