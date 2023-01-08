<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MypimesController;
use App\Http\Controllers\EmprendimientoController;
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
    return view('index');
});
/*Route::get('/formulario', function () {
    return view('mipyme.form');
});*/
//Route::get('/mipyme/create',[MypimesController::class,'create']);

Route::resource('mipyme',MypimesController::class);
Route::resource('emprendimiento',EmprendimientoController::class);