<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class CommentController extends Controller
{
  public function store(CommentRequest $request)
  {
    $this->validated();

    Comment::create([
        'post_id' => $request->post_id,
        'active' => 'ACTIVE',
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
    ]);

    return back()->with('success-message', 'Ваш комментарий успешно добавлен');
  }
}
