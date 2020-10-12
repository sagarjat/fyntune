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

// on spcific page 
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('age');

// this is for group
// Route::group(['middleware' => ['web']], function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::get('/first', function () {
//         return view('first');
//     });
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'McqController@index');
// Route::get('/page2', function () {
//     return view('page2');
// });
// // Route::get('/first', function () {
// //     return view('first');
// // }); 
// Route::any("/login","yout@index");