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

Route::get('/', function () {
    return view('index');
});

/** gewone route */

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/onzefotos', function (){
    return view('photos.index');
});


/** gewone route met variabelen */

Route::get('/post/{id}/{name}', function ($id,$name){
   return "Dit is post nummer " .$id. " " .$name;
});

/** route resource */
Route::resource('/posts', 'Postcontroller');

