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

// dd(auth()->user()->role);
    return view('home.index');
});

Auth::routes();
Route::resource('user', 'Home\UserController')->only('index','edit','update');
Route::resource('tests', 'Home\ReplyController');