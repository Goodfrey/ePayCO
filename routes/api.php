<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/register',         [ApiController::class, 'register']);
Route::post('/recharge',        [ApiController::class, 'recharge']);
Route::post('/payment',         [ApiController::class, 'payment']);
Route::post('/confirmation',    [ApiController::class, 'confirmation']);
Route::post('/consult',         [ApiController::class, 'consult']);