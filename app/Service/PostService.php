<?php

namespace App\Service;

use App\Models\Post;
use App\Repository\PostRepository;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function __construct(private PostRepository $postRepository)
    {

    }

    public function index(){
        $posts = $this->postRepository->allPosts();
        return view('admin.main.index',compact('posts'));
    }

    public function createPostPage(){
        return view('admin.main.add-post');
    }

    public function createPost($request){
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        $this->postRepository->createPost($data);
        return redirect()->route('admin.main.index');
    }

    public function deletePost($post){
        $this->postRepository->deletePost($post);
        return redirect()->route('admin.main.index');
    }

    public function editPostPage($post){
        return view('admin.main.edit-post',compact('post'));
    }

    public function updatePost($post,$request){
        $data = $request->validated();
        $data = array_diff($data, array('', NULL, false));
        $this->postRepository->updatePost($post,$data);
        return redirect('admin');
    }
}
