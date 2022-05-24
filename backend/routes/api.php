<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/bikes', [BikeController::class, 'index']);
Route::get('/bikes/{bike}', [BikeController::class, 'show']);


Route::post('/bikes', [BikeController::class, 'store']);
Route::put('/bikes/{bike}', [BikeController::class, 'update']);

Route::delete('/bikes/{bike}',[BikeController::class, 'destroy']);


