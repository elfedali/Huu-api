<?php

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

// api about
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

// api auth
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::get('/me', [App\Http\Controllers\AuthController::class, 'me']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
