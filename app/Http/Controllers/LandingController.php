<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // funcion de index.blade.php
    //retornando la vista index en carpeta views
    public function index()
    {
        return view('landing.index');
    }

    public function  categorias(){
        return view('landing.categorias');
    }
}
