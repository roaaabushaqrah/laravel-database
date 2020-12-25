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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/students', 'StudentController@store');
Route::get('/students','StudentController@index');
Route::get('/register','StudentController@store');
Route::get('/gallery/{id}','StudentController@show');
Route::get('/dashboard','StudentController@index2');
Route::delete("/delete/{id}","StudentController@destroy");
Route::get("/edit/{id}","StudentController@edit");
Route::post("/update/{id}","StudentController@update");



Route::get('/register1', function () {
    return view('layout.register');
});

 Route::get('dashboard', function () {
  return view('layout.dashboard');
 });


    

Auth::routes();

Route::get('/home', 'HomeController@index');
