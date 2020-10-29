<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function index()
    {
        return view('rewards.index');
    }
    public function create()
    {
        return view('rewards.create');
    }
    public function show($id)
    {
        $temp = Reward::find($id);
        if($temp == null)
        {
            return "404 no found";
        }
        $reward = $temp->toArray();
        /*if($id == 10)
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
        }*/

        return view('rewards.show',$reward);/*->with(["a_ID" => $id,
                                            "a_name"=>$a_name,
                                            "rule"=>$rule,
                                            "money"=>$money]);*/
    }
    public function edit($id)
    {
        $a_name = "NULL";
        $rule = "NULL";
        $money = "NULL";
        return view('rewards.edit')->with(["a_id" => $id,
            "a_name"=>$a_name,
            "rule"=>$rule,
            "money"=>$money]);
    }
}
