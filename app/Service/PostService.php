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
        $post = $data;
        unset($post['images'],$post['main_img']);
        $post['admin_id'] = auth()->user()->id;
        $createPost = $this->postRepository->createPost($post);
        $mainImage = ['main_img' => true, 'image' => $data['main_img'], 'post_id' => $createPost->id];
        $mainImage['image'] = Storage::disk('public')->put('/images', $mainImage['image']);
        $this->postRepository->createImage($mainImage);
        if (array_key_exists('images', $data)){
          $images = $data['images'];
        foreach ($images as $image){
            $img = ['image' => $image, 'post_id' => $createPost->id];
            $img['image'] = Storage::disk('public')->put('/images', $img['image']);
            $this->postRepository->createImage($img);
        }
        }

        return redirect()->route('admin.main.index');
    }

    public function deletePost($post){
        $this->postRepository->deletePost($post);
        return redirect()->route('admin.main.index');
    }

    public function editPostPage($post){
        return view('admin.main.edit-post',compact('post'));
    }

    public function updatePost($post,$request,$image){
        $data = $request->validated();
        $data = array_diff($data, array('', NULL, false));
        $newPost = $data;
        unset($newPost ['images'],$newPost ['main_img']);
        $newPost['admin_id'] = auth()->user()->id;
        $createPost = $this->postRepository->updatePost($post, $newPost);
        if (array_key_exists('main_img', $data)){
            $mainImage = ['main_img' => true, 'image' => $data['main_img'], 'post_id' => $post->id];
            $mainImage['image'] = Storage::disk('public')->put('/images', $mainImage['image']);
            $this->postRepository->updateImage($image,$mainImage);
        }
        if (array_key_exists('images', $data)){
            $images = $data['images'];
            foreach ($images as $image){
                $img = ['image' => $image, 'post_id' => $createPost->id];
                $img['image'] = Storage::disk('public')->put('/images', $img['image']);
                $this->postRepository->updateImage($image,$img);
            }
        }
        return redirect('admin/posts');
    }
}
