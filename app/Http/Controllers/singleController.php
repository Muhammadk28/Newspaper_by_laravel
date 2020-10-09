<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;
use App\Post;
use App\Category;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class singleController extends Controller
{
    public function index($id,$post_url){
        $single = Post::where('id',$id)
                        ->where('post_url',$post_url)
                        ->first();
        $shows = Comment::where('post_id',$id)->get();
        return view('front.single_post',['single'=>$single, 'shows'=> $shows]);
    }
    public function category($category_id){
        $singels = Post::where('category_id',$category_id)
                        
                        ->paginate(10);
        return view('front.category',['singels'=>$singels]);
    }
}
