<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/test', [UserController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);

Route::get('/', function () 
  {
      return view('layouts.template');
  });

Route::get('/coba-laravel', function () 
  {
      return view('welcome');
  });

Route::get('/pageblank', function()
{
  return view('layouts.blankpage');
});

// Route::get('/home', function(){
//     return view('home', [
//         "title" => "Home",
//         "name" => "Zahra",
//         "email" => "anandanicko9@gmail.com",

//     ]);





