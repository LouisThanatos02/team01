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
        $temp->period_name="9990102";
        $temp->a_ID=1;
        $temp->number="98765432";
        $temp->save();

        $receipt=$temp->toArray();
        return view('receipts.edit',$receipt);
    }
    public function store()
    {
        return view('receipts.store');
    }
}
