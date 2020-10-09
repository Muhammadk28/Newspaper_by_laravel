<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class optionController extends Controller
{
    public function index(){
        return view('dash.site_setting');
    }
}
