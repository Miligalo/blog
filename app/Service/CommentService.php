<?php

namespace App\Service;

use App\Models\Comment;

class CommentService
{
    public function createComment($request){
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        Comment::query()->create($data);
        return redirect()->back();
    }
}
