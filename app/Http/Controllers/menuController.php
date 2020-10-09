<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Menu;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
session_start();

class menuController extends Controller
{
    public function index(){
        $shows = Menu::all();
        return view('dash.menu',['shows'=>$shows]);
    }

    public function insert(Request $request){
        $validatedData = $request->validate([
            'label' => 'required|max:20',
            'url' => 'required|max:20',
            
           
        ]);
        $data = [
            'label' => $request->label,
            'url' => $request->url,
            
        ];
        if($data){
            Menu::create($data);
            $request->session()->put('messege', "Menu item Created successfully!!!");
            return redirect()->back();
        }else{
            $request->session()->put('message', "Menu item not created!!!");
            return redirect()->back();
        }
    }

    public function edit($id){
        $menu = Menu::where('id',$id)->first();
        return view('dash.menu-edit',compact('menu'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'label' => 'required|max:20',
            'url' => 'required|max:20',
        ]);
        
      
            Menu::where('id',$id)->update([
                'label' => $request->label,
                'url' => $request->url
            ]);
            $request->session()->put('messege', "Menu item updated successfully!!!");
            return Redirect::to('/dashboard/setting/menu');
      
    }
}
