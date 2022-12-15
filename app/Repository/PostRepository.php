<?php

namespace App\Repository;

use App\Models\ImgPost;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Subscription;

class PostRepository
{
   public function allPosts(){
      return Post::all();
   }

   public function createPost($data){
      return Post::firstOrCreate($data);
   }
   public function createImage($img){
       return ImgPost::firstOrCreate($img);
   }

   public function updateImage($img,$data){
       return $img->update($data);
   }

   public function deletePost($post){
       return $post->delete();
   }
   public function updatePost($post,$data){
       return $post->update($data);
   }
}
