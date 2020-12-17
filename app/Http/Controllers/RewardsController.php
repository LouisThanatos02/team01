<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRewardsRequest;
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
        $reward = Reward::findOrFail($id);

        return view('rewards.show',['reward'=>$reward]);
    }
    public function edit($id)
    {
        $reward = Reward::findOrFail($id);

        return view('rewards.edit',['reward'=>$reward]);
    }
    public function store(CreateRewardsRequest $request)
    {
        $a_name = $request->input('a_name');
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
    public function update($id,CreateRewardsRequest $request)
    {
        $rewards = Reward::findOrFail($id);

        $rewards -> a_name = $request->input('a_name');
        $rewards-> rule = $request->input('rule');
        $rewards-> money = $request->input('money');
        $rewards->save();

        return redirect('rewards');

    }
    public function delete($id)
    {
        $rewards=Reward::findOrFail($id);
        $rewards->delete();
        return redirect('rewards');
    }
}
