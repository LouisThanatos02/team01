<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRewardsRequest;
use App\Models\Receipt;
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
        $receipts = $reward->receipts;
        return view('rewards.show',['reward'=>$reward,'receipts'=>$receipts]);
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
    public function api_rewards()
    {
        return Reward::all();
    }
    public function api_delete(Request $request)
    {
        $reward = Reward::find($request->input('id'));

        if($reward == null)
        {
            return response()
                ->json([
                    'status'=>0,
                ]);
        }

        if($reward->delete())
        {
            return response()
                ->json([
                    'status'=>1,
                ]);
        }
    }
    public function api_updata(Request $request)
    {
        $reward = Reward::find($request->input('id'));
        if ($reward == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $reward->a_name = $request->input('a_name');
        $reward->rule = $request->input('rule');
        $reward->money = $request->input('money');
        if ($reward->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function api_create(Request $request)
    {

    }
}
