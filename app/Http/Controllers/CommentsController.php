<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment  = new Comments;
        $comment->article_id  = $request->article_id;
        $comment->comment = $request->comment;
        if (Auth::check())
        {
            $comment->email = Auth::user()->email;
            $comment->name = Auth::user()->name;
        }
        else
        {
            $comment->email = $request->email;
            $comment->name =  $request->name;
        }
        $comment->save();
        return back()->withInput();
    }
}
