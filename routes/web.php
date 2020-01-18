<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'homecontroller@index' );
Route::resource('/Product', 'Productcontroller' );
Route::view('/contactus', 'contactus');




// Route::view('/about', 'about');

 Route::view('/contact_us', 'contact_us');


// Route::post('/submit-data', function (Request $request) {
//     ///dd($request);
// $data = array("name"=>$request->name,"email"=>$request->email,"message"=>$request->message);
//    //dd($data);
// return view('submit-data',['a'=>$data]);
// });

  Route::view('/registration','registration');
  Route::post('/submit_eregistration', function (Request $request) {
    ///dd($request);
$data = array("user_fname"=>$request->user_fname,
	           "user_sname"=>$request->user_sname,
	           "gender"=>$request->gender,
	           "user_email"=>$request->user_email,
	           "user_phone"=>$request->user_phone,
	           "message"=>$request->message);
   //dd($data);
return view('submit_eregistration',['a'=>$data]);
});

route::get('about/{name}','pcontroller@about');

Route::post('product/submitRating', 'Productcontroller@submitRating');