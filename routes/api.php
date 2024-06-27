<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/data-list-store',[formDataController::class,'index']);
Route::post('data-list-store',[formDataController::class,'store']);
Route::get('data-list-store/{id}/edit',[formDataController::class,'edit']);
Route::put('data-list-store/{id}/update',[formDataController::class,'update']);
Route::delete('data-list-store/{id}/delete',[formDataController::class,'destroy']);
