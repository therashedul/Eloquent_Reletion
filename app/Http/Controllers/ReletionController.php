<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
use App\Models\User;
use App\Models\Auth;
use App\Models\Phone;
use App\Models\Machine;
use App\Models\Car;
use App\Models\Owner;
use DB;

class ReletionController extends Controller
{
    public function index(){
    $posts =Post::with('categories')->get();

    $comments =Post::with('comments')->get();
    $post =Post::with('category')->get();
    // $posts =Post::with('categories')->get();
    return view('reletion.index',compact('posts'));
   

    // return $posts;
    // return $comments;
    
        
    }
    public function onetoone(){
        $phones =User::with('phones')->get();   
        // return $phones;    
        return view('reletion.onetoone',compact('phones'));
        }
    public function onetomany(){
            $postComments =Post::with('comments')->get();
            $postCategories =Post::with('category')->get();
            return view('reletion.onetomany',compact('postComments'));
   }
    public function manytomany(){
            $postCategories =Post::with('categories')->get();
            return view('reletion.manytomany',compact('postCategories'));
    }
    public function onetoonethrow(){
            $owners = Machine::with('carOwer')->get();  
            // return $owners;
            return view('reletion.onetoonethrough',compact('owners'));               
    }
    public function manytomanythrow(){
            $countries = Country::with('posts')->get();
            return view('reletion.manytomanythrough',compact('countries'));  
    }

}
