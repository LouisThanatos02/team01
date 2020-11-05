<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class RecriptsController extends Controller
{
    public function index()
    {
        return view('receipts.index');
    }
    public function create()
    {
        return view('receipts.create');
    }
    public function show($id)
    {
        $temp = Receipt::findOrFail($id);
        //$temp = Receipt::where('number','09530169')->first();
        /*if($temp == null)
        {
            return "404 no found";
        }*/
        $receipt = $temp->toArray();
        /*if($id == 10)
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
        $data = compact('period_name','a_ID','number');*/

        return view('receipts.show',$receipt);/*->with(["n_id" => $id,
                                            "p_name"=>$period_name,
                                            "a_ID"=>$a_ID,
                                            "num"=>$number]);*/
    }
    public function edit($id)
    {
        $period_name = "NULL";
        $a_ID = "NULL";
        $number = "NULL";
        return view('receipts.edit')->with(["n_id" => $id,
                                                 "period_name"=>$period_name,
                                                 "a_ID"=>$a_ID,
                                                 "number"=>$number]);
    }
}
