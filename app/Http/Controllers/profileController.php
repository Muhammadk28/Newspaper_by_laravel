<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class profileController extends Controller
{
    public function index(){
        $user = Auth::user();
        
        return view('dash.profile',compact('user'));
    }
}
