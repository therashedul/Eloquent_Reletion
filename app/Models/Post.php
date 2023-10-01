<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    // one to many
    public function comments()
    {   
        return $this->hasMany(Comment::class);
    }
    // one to many
    public function category(){
        return $this->belongsTo(Category::class, 'id');
    }
    // many to many
    public function categories(){
        return $this->belongsToMany(Category::class,'category_posts','category_id', 'post_id');
    }
}
