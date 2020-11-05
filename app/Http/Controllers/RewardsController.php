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
        $a_name="test";
        $rule="test";
        $money=10000000;
        Reward::create([
           'a_name' => $a_name,
            'rule' => $rule,
            'money' => $money
        ]);
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
        $reward = Reward::findOrFail($id)->toArray();
        return view('rewards.edit',$reward);
    }
}
