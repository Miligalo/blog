<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgPost extends Model
{
    use HasFactory;

    protected $table = 'img_posts';
    protected $guarded = false;

    public function post(){
        return $this->belongsTo(User::class, 'post_id');
    }
}
