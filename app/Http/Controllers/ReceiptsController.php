<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Reward;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReceiptsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        $rewards = Reward::all();
        return view('receipts.index',['receipts'=>$receipts , 'rewards'=>$rewards]);
    }
    public function create()
    {
        return view('receipts.create');
    }
    public function show($id)
    {
        $temp = Receipt::findOrFail($id);
        $receipt = $temp->toArray();

        return view('receipts.show',$receipt);
    }
    public function edit($id)
    {
        $temp = Receipt::findOrFail($id);
        $receipt=$temp->toArray();
        return view('receipts.edit',$receipt);
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
}
