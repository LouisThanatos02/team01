<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function index()
    {
        $rewards = Reward::all();;
        return view('rewards.index',['rewards'=>$rewards]);
    }
    public function create()
    {
        return view('rewards.create');
    }
    public function show($id)
    {
        $temp = Reward::findOrFail($id);
        $reward = $temp->toArray();
        return view('rewards.show',$reward);
    }
    public function edit($id)
    {
        $temp = Reward::findOrFail($id);
        $temp->a_name="激動獎";
        $temp->rule="(很長很長的規則)";
        $temp->money=50;
        $temp->save();

        $reward=$temp->toArray();
        return view('rewards.edit',$reward);
    }
    public function store(Request $request)
    {
        $a_name = $request->input('name');
        $rule = $request->input('rule');
        $money = $request->input('money');

        Reward::create([
            'a_name' => $a_name,
            'rule' => $rule,
            'money' => $money,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('rewards');
    }
}
