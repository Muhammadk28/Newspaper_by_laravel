<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){

        $show = "this is about us page";
        return $show;
    }
}
