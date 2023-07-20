<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Creacion extends Controller
{
    public function creacion($creacion){
        // return view('creacionProyecto',compact('creacion'));
        return view('welcome',compact('creacion'));

    }
}
