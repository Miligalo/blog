<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\CreateRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.main.index',compact('posts'));
    }

    public function createPostPage(){
        return view('admin.main.add-post');
    }

    public function createPost(CreateRequest $request){
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Post::firstOrCreate($data);
        return redirect()->route('admin.main.index');
    }

    public function deletePost(Post $post){
        $post->delete();
        return redirect()->route('admin.main.index');
    }

    public function editPostPage(Post $post){
        return view('admin.main.edit-post',compact('post'));
    }

    public function updatePost(Post $post,UpdateRequest $request){
        $data = $request->validated();
        $data = array_diff($data, array('', NULL, false));
        $post->update($data);
        return redirect('admin');
    }



}
