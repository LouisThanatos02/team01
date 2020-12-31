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
    Route::patch('receipts', [ReceiptsController::class, 'api_updata']);
    Route::delete('receipts',[ReceiptsController::class,'api_delete']);
    Route::post('receipts',[ReceiptsController::class,'api_create']);

    Route::get('rewards',[RewardsController::class,'api_rewards']);
    Route::patch('rewards', [RewardsController::class, 'api_updata']);
    Route::delete('rewards',[RewardsController::class,'api_delete']);
    Route::post('rewards',[RewardsController::class,'api_create']);
});
