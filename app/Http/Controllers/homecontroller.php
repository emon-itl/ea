<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class homecontroller extends Controller
{
    public function index(){


    	$products = DB::table('products')->get();
       // dd($products);
        //return view ('product.index',compact('products'));

    	// $data = array(
    	// 	'name'=>'Emon',
    	// 	'email'=>'emon@xyz.com',
    	// 	'message'=>'hello',
    	// );

    	return view('home',compact('products'));
    }
}
