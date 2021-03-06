<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable=[
        'period_name',
        'a_ID',
        'number',
        'created_at',
        'updated_at'
    ];
    public function reward()
    {
        return $this->belongsTo('App\Models\Reward','a_ID','id');
    }

    /*public function scopeSearchAll($query)
    {
        $query->join('rewards','receipts.a_ID','=','rewards.id')
            ->orderBy("receipts.id")
            ->select('receipts.id','receipts.period_name as p_name','rewards.a_name','receipts.number','receipts.a_ID');
    }*/
    public function scopeSearchOne($query,$id)
    {
        $query->join('rewards','receipts.a_ID','=','rewards.id')
            ->orderBy("receipts.id")
            ->select('receipts.id','receipts.period_name as p_name','rewards.a_name','receipts.number','receipts.a_ID')
            ->where('receipts.id','=',$id);
    }
    public function scopeallPname($query)
    {
        $query->select('period_name as p_name')->groupBy('period_name');
    }
    public function scopeSearch($query,$pname,$aname)
    {
        $query->join('rewards','receipts.a_ID','=','rewards.id')
            ->orderBy("receipts.id")
            ->select('receipts.id','receipts.period_name as p_name','rewards.a_name','receipts.number');
        if($pname != 0)
            $query->where('receipts.period_name','=',$pname);
        if($aname != 0)
            $query->where('receipts.a_ID','=',$aname);
    }
}
