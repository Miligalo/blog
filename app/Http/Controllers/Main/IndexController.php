<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $freePosts = Post::query()->where('private', '=', 'free')->get();
        $vipPosts = Post::query()->where('private', '=', 'vip')->get();
        return view('welcome', compact('freePosts', 'vipPosts'));
    }

}