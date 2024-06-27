<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-list-store',[formDataController::class,'index']);
Route::get('/create-list', function () {
    return view('create-data');
});
Route::post('data-list-store',[formDataController::class,'store']);
Route::get('data-list-store/{id}/edit',[formDataController::class,'edit']);
Route::put('data-list-store/{id}/update',[formDataController::class,'update']);
Route::delete('data-list-store/{id}/delete',[formDataController::class,'destroy']);
