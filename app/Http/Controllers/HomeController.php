<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //retorna una funcion que nos lleva a incio 
    //invoke solo se puede usar una vez
    public function __invoke()
    {
        //retornamos 
        return ("incio");
    }
}
