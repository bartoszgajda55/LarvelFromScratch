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
//    $city = 'Glasgow';

    $tasks = [
        'Go to the store',
        'Finish doing something',
        'Do nothing'
    ];

//    return view('welcome', [
//        'name' => 'John',
//        'city' => $city
//    ])->with('age', 3);
    return view('welcome', compact('tasks'));
});

Route::get('/about', function() {
   return view('about');
});