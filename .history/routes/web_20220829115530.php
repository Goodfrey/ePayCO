<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix'  =>  '/api'], function()
{
    // Route::get('/register',         [ApiController::class, 'register'])->name('/register');
    Route::post('/register',        [ApiController::class, 'register']);
});

Route::get('/test',         [TestController::class, 'index'])->name('/test');
