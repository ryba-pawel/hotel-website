<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $name = 'Paweł';
        return view('about')->with('name', $name);
    }
}
