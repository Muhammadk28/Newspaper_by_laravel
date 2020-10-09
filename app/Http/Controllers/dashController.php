<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
class dashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('dash.dashboard');
    }
    public function show(){
        $shows = Subscriber::all();
        return view('dash.subscriber',['shows'=>$shows]);
    }

}
