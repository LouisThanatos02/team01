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
        $receipts = DB::table('receipts')
        ->join('rewards','receipts.a_ID','=','rewards.id')
        ->orderBy("receipts.id")
        ->select('receipts.id','receipts.period_name as p_name','rewards.a_name','receipts.number')
        ->get();

        return view('receipts.index',['receipts'=>$receipts]);
    }
    public function create()
    {
        $reward = DB::table('rewards')
            ->select('rewards.id','rewards.a_name')
            ->orderBy('rewards.id','asc')
            ->get();

        $data=[];
        foreach ($reward as $reward)
        {
            $data[$reward->id]=$reward->a_name;
        }
        return view('receipts.create',['reward'=>$data]);
    }
    public function show($id)
    {
        $receipt = DB::table('receipts')
            ->join('rewards','receipts.a_ID','=','rewards.id')
            ->orderBy("receipts.id")
            ->select('receipts.id','receipts.period_name as p_name','rewards.a_name','receipts.number')
            ->where('receipts.id','=',$id)
            ->get();

        return view('receipts.show',['receipt'=>$receipt]);
    }
    public function edit($id)
    {
        $receipt = Receipt::findOrFail($id);
        $reward = DB::table('rewards')
            ->select('rewards.id','rewards.a_name')
            ->orderBy('rewards.id','asc')
            ->get();

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
