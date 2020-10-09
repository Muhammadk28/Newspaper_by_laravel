<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Subscriber;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
session_start();

class subscriberController extends Controller
{
    public function index(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:subscribers',
           
        ]);
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'action' => '1',
        ];
        if($data){
            Subscriber::create($data);
            $request->session()->put('messege', "You Subscribed successfully!!!");
            return redirect()->back();
        }else{
            $request->session()->put('message', "You Subscribed again!!!");
            return redirect()->back();
        }
        
    }
}
