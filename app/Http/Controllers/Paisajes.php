<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paisajes extends Controller
{
    public function index($inicio){
        return view('welcome',compact('inicio'));
    }
    
}
