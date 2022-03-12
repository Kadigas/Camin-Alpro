<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaminController;

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
    return view('welcome');
});

Route::get('/test', function () {
    return "Testing routing";
});

Route::get('/camin', [CaminController::class, "index"]);
Route::get('/camin/1', [CaminController::class, "show1"]);
Route::get('/camin/2', [CaminController::class, "show2"]);
Route::get('/camin/3', [CaminController::class, "show3"]);
Route::get('/camin/4', [CaminController::class, "show4"]);