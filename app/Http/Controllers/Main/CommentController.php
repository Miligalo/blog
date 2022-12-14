<?php

namespace App\Http\Controllers\Main;

use App\Http\Requests\Index\Comment\CreateRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Service\CommentService;

class CommentController
{
    public function __construct(private CommentService $commentService)
    {

    }
    public function store(CreateRequest $request){
        return $this->commentService->createComment($request);
    }
}
