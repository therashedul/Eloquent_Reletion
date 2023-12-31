<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Country extends Model
{
    use HasFactory;
    public function posts(){
        return $this->hasManyThrough(Post::class, User::class,'id');
    }
    public function user(){
        return $this->belongsTo(User::class,'id');
    }

}
