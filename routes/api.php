<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\KoliController;

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
Route::post('register',[UserController::class, 'store']);
Route::post('putin',[ItemController::class, 'store']);
Route::post('takeout/{id}',[ItemController::class, 'update']);
Route::get('koli/common/{id}',[ItemController::class, 'show']);

Route::post('putin/koli',[KoliController::class, 'store']);
Route::get('user',[UserController::class, 'index']);
Route::get('item/remove/{id}',[ItemController::class, 'destroy']);
Route::get('koli/remove/{id}',[KoliController::class, 'destroy']);
Route::get('user/remove/{id}',[UserController::class, 'destroy']);
