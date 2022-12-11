<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\CreateRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function __construct(private PostService $postService)
    {

    }
    public function index(){
        return $this->postService->index();
    }

    public function createPostPage(){
       return $this->postService->createPostPage();
    }

    public function createPost(CreateRequest $request){
       return $this->postService->createPost($request);
    }

    public function deletePost(Post $post){
        return $this->postService->deletePost($post);
    }

    public function editPostPage(Post $post){
        return $this->postService->editPostPage($post);
    }

    public function updatePost(Post $post,UpdateRequest $request){
        return $this->postService->updatePost($post, $request);
    }



}
