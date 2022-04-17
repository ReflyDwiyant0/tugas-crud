<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;

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

Route::view('master','template/master');

Route::get('data-dosen',[DosenController::class, 'index']);
Route::get('add-dosen', [DosenController::class, 'create']);