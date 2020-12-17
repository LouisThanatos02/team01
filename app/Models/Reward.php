<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;
    protected $fillable=[
        'a_name',
        'rule',
        'money',
        'created_at',
        'updated_at'
    ];
    public function scopeSearch($quarry)
    {
        $quarry->select('rewards.id','rewards.a_name')
            ->orderBy('rewards.id','asc');
    }


}
