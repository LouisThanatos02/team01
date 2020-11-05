<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptsTableSeeder extends Seeder
{
    public function CreateRandomPeriod($length = 3)
    {
        $p_year = '0123456789';
        $p_month=['0102','0304','0506','0708','0910','1112'];
        $p_year_Length = strlen($p_year);
        $randomP='';
        for($i=0;$i<$length;$i++)
        {
            $randomP .= $p_year[rand(0,$p_year_Length-1)];
        }
        $randomP .= $p_month[rand(0,count($p_month)-1)];
        return $randomP;
    }
    public function a_IDChack($number)
    {
        $number_length = strlen($number);
        $a_id=0;
        if($number_length==8)
            $a_id = rand(1,3);
        elseif ($number_length==7)
            $a_id = 4;
        elseif ($number_length==6)
            $a_id = 5;
        elseif ($number_length==5)
            $a_id = 6;
        elseif ($number_length==4)
            $a_id = 7;
        elseif ($number_length==3)
            $a_id = rand(8,9);
        return $a_id;
    }
    public function CreateRandomNumber()
    {
        $num = '0123456789';
        $num_Length = strlen($num);
        $randomN = '';
        $length = rand(3,8);
        for($i=0;$i<$length;$i++)
        {
            $randomN .= $num[rand(0,$num_Length-1)];
        }
        return $randomN;
    }
    public function run()
    {
        for($i=0;$i<40;$i++) {
            $period_name=$this->CreateRandomPeriod();
            $number=$this->CreateRandomNumber();
            $a_ID=$this->a_IDChack($number);
            DB::table('receipts')->insert([
                "period_name" => $period_name,
                "a_ID" => $a_ID,
                "number" => $number,
                "created_at" => Carbon::now()->subMinute(rand(1,58)),
                "updated_at" => Carbon::now()->subMinute(rand(1,58)),
            ]);
        }
    }
}
