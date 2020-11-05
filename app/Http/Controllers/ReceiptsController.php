<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReceiptsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index',['receipts'=>$receipts]);
    }
    public function create()
    {

        $period_name = "";
        $a_ID = rand(1,8);
        $number = "";

        Receipt::create([
            'period_name' => $period_name,
            'a_ID' => $a_ID,
            'number' => $number,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
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
        $receipt = Receipt::findOrFail($id)->toArray();
        return view('receipts.edit',$receipt);
    }
}
