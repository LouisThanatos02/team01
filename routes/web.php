<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceiptsController;
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
Route::get('receipts',[ReceiptsController::class,'index'])->name('receipts.index');
//刪除---------------------------------------
Route::delete('receipts/delete/{id}', [ReceiptsController::class,'delete'])->where('id','[0-9]+')->name('receipts.delete');

//建立-------------------------------------------------
Route::get('receipts/create', [ReceiptsController::class,'create'])->name('receipts.create');
//建立儲存---------------------------------------------------
Route::post('receipts/store', [ReceiptsController::class,'store'])->name('receipts.store');

//顯示單筆-----------------------------------------------
Route::get('receipts/{id}', [ReceiptsController::class,'show'])->where('id','[0-9]+')->name('receipts.show');

//修改--------------------------------------------------
Route::get('receipts/{id}/edit', [ReceiptsController::class,'edit'])->where('id','[0-9]+')->name('receipts.edit');
//修改儲存------------------------------------------------
Route::patch('receipts/update/{id}', [ReceiptsController::class,'update'])->where('id','[0-9]+')->name('receipts.update');





/*--------------------------------------
獎項
----------------------------------------*/
//查詢---------------------------------------
Route::get('rewards', [RewardsController::class,'index'])->name('rewards.index');
//刪除---------------------------------------
Route::delete('rewards/delete/{id}', [RewardsController::class,'delete'])->where('id','[0-9]+')->name('rewards.delete');

//建立-------------------------------------------
Route::get('rewards/create', [RewardsController::class,'create'])->name('rewards.create');
//建立儲存---------------------------------------------------
Route::post('rewards/store', [RewardsController::class,'store'])->name('rewards.store');

//顯示單筆-------------------------------------------
Route::get('rewards/{id}', [RewardsController::class,'show'])->where('id','[0-9]+')->name('rewards.show');

//修改-------------------------------------------------
Route::get('rewards/{id}/edit', [RewardsController::class,'edit'])->where('id','[0-9]+')->name('rewards.edit');
//修改儲存------------------------------------------------
Route::patch('rewards/update/{id}', [RewardsController::class,'update'])->where('id','[0-9]+')->name('rewards.update');


