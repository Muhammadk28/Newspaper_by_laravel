<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Post;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
session_start();

class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $cats = Category::all();
        return view('dash.post.add', compact('cats'));
    }
    public function insert(Request $request){
       
           
            $post_title = $request->post_title;
            $post_content = $request->post_content;
            $author = Auth::user()->id ;
            $category = $request->category;          
            $post_url = str_replace(" ", "-", $post_title);
            $action = "post";
            $data = [
                'post_title' => $post_title,
                'post_content' => $post_content,
                'category_id'=> $category,
                'user_id'=>$author,
                'post_url'=> $post_url,
                'action'=> $action
                
            ];
            $image=$request->file('feature_image');
            if($image){
                $image_name=Str::random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
        
                $data['feature_image']=$image_url;
                Post::insert($data);
                Session::put('messege','Post added successfully!!');
                return Redirect::to('/dashboard/create-post');
            }else{
                $data['feature_image']= "";
                Post::insert($data);
                Session::put('messege','Post added successfully without image!!');
                return Redirect::to('/dashboard/create-post');
            }
        
            
        
          
        
    }
    public function show(){
        $shows = Post::all();
        return view('dash.post.list',['shows'=>$shows]);
    }
    public function edit($id){
        $edit = Post::where('id',$id)->get();
        $cats = Category::all();
        
        return view('dash.post.edit',compact('edit','cats'));
    }

    

}
