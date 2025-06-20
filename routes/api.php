<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/store', [UserController::class, 'store'])->name('api.register');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('api.authenticate');
Route::middleware('auth:sanctum')->get('/profile', function (Request $request) {
    return $request->user();
});