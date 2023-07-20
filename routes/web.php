<?php
//llamamos a nuestro controlador
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Paisajes;
use App\Http\Controllers\Creacion;
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

//solo importamos nuestro homecontroler
Route::get('/', [HomeController::class]);
// Route::get('/{inicio}',[Paisajes::class, 'index']);
