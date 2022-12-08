<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
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
        $post = Post::query()->where('id',$post)->first();
        return view('main.post', compact('post'));
    }

    public function vpnShow(){
        return view('vpn.main');
    }

}
