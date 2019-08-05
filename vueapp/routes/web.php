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
    return view('welcome',
    [
        'title' => "This is a difference way to set title"
    ]);
});

Route::get('/page', function (){
    return view('page',
    [
       'title' => "This is About author page",
       'author' => json_encode(
           [
                "name" => "Bien Nguyen",
                "role" => "Software Engineer",
                "code" => "Dont let me kill you "
           ]
       )
    ]);
});

Route::get('/{any}', function (){
    return view('vueapp');
})->where('any', '.*');

