<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pcontroller extends Controller
{
    public function about($name)
    {

    	return view('about', compact('name'));
    }
}
