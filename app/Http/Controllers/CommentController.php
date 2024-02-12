<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function create(Request $request){
        $comment = new Comment();

        $comment->content = $request->content;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
    
        $comment->save();

        return redirect()->route('home');
    }

    // public function delete($id) {
		
	// 	// create a variable where we store the id comment we want to delete
	// 		$comment = Comment::find($id);
	// 		$comment->delete();

	// 		return redirect()->route('home');
	// }
}
