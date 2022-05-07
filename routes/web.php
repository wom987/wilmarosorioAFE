<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    if (auth()->user()) {
        return redirect()->action([ProductController::class, 'index']);
    } else {
        return view('auth.login');
    }
});
Route::get('/products', "ProductController@index");
Route::get('/products/create', "ProductController@create");
Route::get('/products/{product}', "ProductController@show");
Route::post('/products', "ProductController@store");

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
