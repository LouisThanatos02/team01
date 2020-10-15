<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecriptsController;
use App\Http\Controllers\RewardsController;
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
    return view('index');
})->name('index');

/*--------------------------------------
發票
----------------------------------------*/
//查詢-------------------------------------------------
Route::get('receipts',[RecriptsController::class,'index'])->name('receipts.index');

//建立-------------------------------------------------
Route::get('receipts/create', [RecriptsController::class,'create']);

//顯示單筆-----------------------------------------------
Route::get('receipts/{id}', [RecriptsController::class,'show'])->where('id','[0-9]+');

//修改--------------------------------------------------
Route::get('receipts/{id}/edit', [RecriptsController::class,'edit'])->where('id','[0-9]+');;


/*--------------------------------------
獎項
----------------------------------------*/
//查詢---------------------------------------
Route::get('rewards', [RewardsController::class,'index'])->name('rewards.index');

//建立-------------------------------------------
Route::get('rewards/create', [RewardsController::class,'create']);

//顯示單筆-------------------------------------------
Route::get('rewards/{id}', [RewardsController::class,'show'])->where('id','[0-9]+');

//修改-------------------------------------------------
Route::get('rewards/{id}/edit', [RewardsController::class,'edit'])->where('id','[0-9]+');;
