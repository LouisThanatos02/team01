<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReceiptsController;
use App\Http\Controllers\RewardsController;
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
Route::post('register',[AuthController::class,'register']);

Route::post('login',[AuthController::class,'login']);

Route::group(['middleware'=>'auth:sanctum'],function (){
    Route::get('receipts',[ReceiptsController::class,'api_receipts']);
    Route::delete('receipts',[ReceiptsController::class,'api_delete']);

    Route::get('rewards',[RewardsController::class,'api_rewards']);
    Route::delete('rewards',[RewardsController::class,'api_delete']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
