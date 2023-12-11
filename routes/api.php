<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApitryController;

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

Route::controller(ApitryController::class)->group(function () {
    Route::get('/char', 'alice');
    Route::get('/char', 'bob');
});

Route::get('/char', [ApitryController::class, 'alice']);
Route::get('/char', [ApitryController::class, 'bob']);
