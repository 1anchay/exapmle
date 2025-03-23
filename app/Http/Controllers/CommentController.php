<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Комментарий добавлен!');
    }

    public function index()
{
    $comments = Comment::paginate(10);  // Пагинация с 10 комментариями на странице
    return view('comments', compact('comments'));
}

    
}
