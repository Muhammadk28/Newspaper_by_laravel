<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Menu;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $breaks = Post::where('category_id',2)->get();
        $editors = Post::where('category_id',4)->get();
        $worlds = Post::where('category_id',5)->get();
        
       
        return view('home',[
            'breaks'=>$breaks,
            'editors'=>$editors,
            'worlds'=>$worlds,
           
            ]);
    }

}

