<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [TodolistController::class, 'index'])->name('index');
Route::post('/', [TodolistController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy'); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
