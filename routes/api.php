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


// api task
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store']);
Route::get('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'show']);
Route::put('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'update']);
Route::delete('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'destroy']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
