<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = false;

    public function img(){
        return $this->hasMany(ImgPost::class);
    }
    public function mainImg(){
        return $this->img()->where('main_img', '=', true)->first();
    }
}
