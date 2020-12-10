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

        $temp = $receipts->toArray();
        $lestId = end($receipts);
        //return $lestId;
        return view('receipts.index',['receipts'=>$receipts,'lestID'=>$lestId]);
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
        $targe=Receipt::findOrFail($id);
        return redirect('receipts');
    }
    public function downOne($id)
    {
        return redirect('receipts');
    }
}
