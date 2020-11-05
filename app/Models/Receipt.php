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
}
