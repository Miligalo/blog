<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ImgPost;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $freePosts = Post::query()->where('private', '=', 'free')->get();
        $vipPosts = Post::query()->where('private', '=', 'vip')->get();
        return view('welcome', compact('freePosts', 'vipPosts'));
    }

    public function showPost($post){
        $post = Post::find($post);
        $comments = Comment::query()->where('post_id', '=', $post->id)->get();
        return view('main.post', compact('post', 'comments'));
    }

    public function vpnShow(){
        return view('vpn.main');
    }

}
