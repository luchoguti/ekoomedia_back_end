<?php

use App\Http\Controllers\ItemMenuController;
use App\Http\Controllers\UsersController;
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
Route::apiResource ('user', UsersController::class)
    ->except (['store','update','destroy']);
Route::apiResource ('item_menu', ItemMenuController::class)
    ->except (['store','update','destroy']);
Route::post ('/user',[UsersController::class,'create']);

