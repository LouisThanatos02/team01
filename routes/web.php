<?php

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
    return view('index');
})->name('index');

/*--------------------------------------
發票
----------------------------------------*/
//查詢-------------------------------------------------
Route::get('receipts', function () {
    return view('receipts.index');
})->name('receipts.index');

//建立-------------------------------------------------
Route::get('receipts/create', function () {
    return view('receipts.create');
});

//顯示單筆-----------------------------------------------
Route::get('receipts/{id}', function ($id) {
    if($id == 10)
    {

        $period_name = "1080102";  //$period_name = "";
        $a_ID= "5";  //$a_ID = "";
        $number = "12345678";  //$number = "";
    }
    else
    {
        $period_name = "NULL";  //$period_name = "";
        $a_ID = "NULL";  //$a_ID = "";
        $number = "NULL";  //$number = "";
    }
    $data = compact('period_name','a_ID','number');

    return view('receipts.show',$data);/*->with(["n_id" => $id,
                                            "p_name"=>$period_name,
                                            "a_ID"=>$a_ID,
                                            "num"=>$number]);*/
})->where('id','[0-9]+');

//修改--------------------------------------------------
Route::get('receipts/{id}/edit', function ($id) {
    $period_name = "NULL";
    $a_ID = "NULL";
    $number = "NULL";
    return view('receipts.edit')->with(["n_id" => $id,
                                            "period_name"=>$period_name,
                                            "a_ID"=>$a_ID,
                                            "number"=>$number]);
})->where('id','[0-9]+');;


/*--------------------------------------
獎項
----------------------------------------*/
//查詢---------------------------------------
Route::get('rewards', function () {
    return view('rewards.index');
})->name('rewards.index');

//建立-------------------------------------------
Route::get('rewards/create', function () {
    return view('rewards.create');
});

//顯示單筆-------------------------------------------
Route::get('rewards/{id}', function ($id) {
    if($id == 10)
    {
        $data = [];
        $data['a_name'] = "頭獎";  //$a_name = "";
        $data['rule'] = "......";  //$rule = "";
        $data['money'] = "10000000";  //$money = "";
    }
    else
    {
        $data = [];
        $data['a_name'] = "NULL";  //$a_name = "";
        $data['rule'] = "NULL";  //$rule = "";
        $data['money'] = "NULL";  //$money = "";
    }

    return view('rewards.show',$data);/*->with(["a_ID" => $id,
                                            "a_name"=>$a_name,
                                            "rule"=>$rule,
                                            "money"=>$money]);*/
})->where('id','[0-9]+');

//修改-------------------------------------------------
Route::get('rewards/{id}/edit', function ($id) {
    $a_name = "NULL";
    $rule = "NULL";
    $money = "NULL";
    return view('rewards.edit')->with(["a_ID" => $id,
                                            "a_name"=>$a_name,
                                            "rule"=>$rule,
                                            "money"=>$money]);
})->where('id','[0-9]+');;
