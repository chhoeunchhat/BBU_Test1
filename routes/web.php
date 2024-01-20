<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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
    // return view('welcome');
});
Route::get('/hello', function () {
     return "<h1>Hello Everyone!</h1>";
});
Route::match (['get','post'],'match',function (){
    return "<h1>This is match for Multple routes and parameters</h1>";
});
Route::get('/std/{id}', function ($id){
    return "Student info for is : ".$id ;
})->where('id','[0-9]+');


// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/category', function () {
//     return view('category');
// });
// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/home',[HomeController::class,'index']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/category',[HomeController::class,'category']);





