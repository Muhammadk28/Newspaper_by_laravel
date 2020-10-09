<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){

        $show = "this is contact us page";
        return $show;
    }
}
