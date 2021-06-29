<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\EquipoController;

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


Route::get('/equipos', function () {
    return view('equipos/index');
})->name("home");

Route::resource('/equipos', EquipoController::class);