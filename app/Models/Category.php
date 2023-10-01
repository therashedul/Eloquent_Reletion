<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    // many to many
    public function posts(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id');
    }
    // one to many
    public function post(){
          return $this->hasMany(Post::class,'cat_id');
    }    
}
