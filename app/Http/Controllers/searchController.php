<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class searchController extends Controller
{
    public function index(){

        $search = request('search');
        if($search){
            $posts = Post::where('post_title', 'like', "%{$search}%")->get();
            return view('front.search',compact('posts'));
        }else{
             return redirect()->back();
        }
       
    }
}
