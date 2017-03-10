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

Route::get('/', 'Controller@Youtube');
Route::post('/add', 'Controller@AddUser');
Route::get('/admin', 'Controller@Admin');
Route::post('/delete/{id}', 'Controller@Delete');


Route::get('/test', function() {
    return view('winner');
});
