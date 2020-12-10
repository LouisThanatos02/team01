<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Reward;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::searchall()->get();
        $p_name = Receipt::allPname()->get();

        $data=[];
        foreach ($p_name as $p_name)
        {
            $data["$p_name->p_name"]=$p_name->p_name;
        }

        $temp = $receipts->toArray();
        $lestId = end($temp);
        foreach ($lestId as $lestId)
        return view('receipts.index',['receipts'=>$receipts,'lestID' => $lestId,'p_name'=>$data]);
    }
    public function create()
    {
        $reward = Reward::search()->get();

        $data=[];
        foreach ($reward as $reward)
        {
            $data[$reward->id]=$reward->a_name;
        }
        return view('receipts.create',['reward'=>$data]);
    }
    public function show($id)
    {
        $receipt = Receipt::searchone($id)->get();

        return view('receipts.show',['receipt'=>$receipt]);
    }
    public function edit($id)
    {
        $receipt = Receipt::searchone($id)->get();
        $reward = Reward::search()->get();

        $data=[];
        foreach ($reward as $reward)
        {
            $data[$reward->id]=$reward->a_name;
        }
        return view('receipts.edit',['receipt'=>$receipt,'reward'=>$data]);
    }
    public function store(Request $request)
    {
        $p_name = $request->input('p_name');
        $a_id = $request->input('a_id');
        $number = $request->input('number');

        Receipt::create([
            'period_name' => $p_name,
            'a_ID' => $a_id,
            'number' => $number,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('receipts');
    }
    public function update($id,Request $request)
    {
        $receipts = Receipt::findOrFail($id);

        $receipts -> period_name = $request->input('p_name');
        $receipts-> a_ID = $request->input('a_id');
        $receipts-> number = $request->input('number');
        $receipts->save();

        return redirect('receipts');

    }
    public function delete($id)
    {
        $receipts=Receipt::findOrFail($id);
        $receipts->delete();
        return redirect('receipts');
    }
    public function upOne($id)
    {
        /*$target = Receipt::find($id);
        $beSwitched = Receipt::find($id-1);
        $p_nameTemp = $target->period_name;
        $a_id_Temp = $target->a_ID;
        $number_Temp = $target->number;

        $target->period_name = $beSwitched->period_name;
        $target->a_ID = $beSwitched->a_ID;
        $target->number = $beSwitched->number;

        $beSwitched->period_name = $p_nameTemp;
        $beSwitched->a_ID = $a_id_Temp;
        $beSwitched->number = $number_Temp;
        $target->save();
        $beSwitched->save();*/


        //return $target;
        return redirect('receipts');
    }
    public function downOne($id)
    {
        //$target = Receipt::find($id);
        //$beSwitched = Receipt::find($id+1);

        return redirect('receipts');
    }
    public function findsame(Request $request)
    {
        $receipts = Receipt::findsame($request->input('p_name'))->get();
    }
}
