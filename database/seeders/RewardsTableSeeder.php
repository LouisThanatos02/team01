<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RewardsTableSeeder extends Seeder
{
    public function randomA_name()
    {

    }
    public function run()
    {

        DB::table('rewards')->insert([
            "a_name" => "特別獎",
            "rule" => "統一發票八位數號碼與中獎號碼完全相同者，獎金新臺幣一千萬",
            "money" => "10000000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "特獎",
            "rule" => "統一發票八位數號碼與中獎號碼完全相同者，獎金新臺幣二百萬",
            "money" => "2000000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "一獎",
            "rule" => "統一發票八位數號碼與中獎號碼完全相同者，獎金新臺幣二十萬",
            "money" => "200000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "二獎",
            "rule" => "統一發票末七位數號碼與中獎號碼之末七位完全相同者，獎金新臺幣四萬",
            "money" => "40000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "三獎",
            "rule" => "統一發票末六位數號碼與中獎號碼之末六位完全相同者，獎金新臺幣一萬",
            "money" => "10000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "四獎",
            "rule" => "統一發票末五位數號碼與中獎號碼之末五位完全相同者，獎金新臺幣四千",
            "money" => "4000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "五獎",
            "rule" => "統一發票末四位數號碼與中獎號碼之末四位完全相同者，獎金新臺幣一千",
            "money" => "1000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "六獎",
            "rule" => "統一發票末三位數號碼與中獎號碼之末三位完全相同者，獎金新臺幣兩百",
            "money" => "200",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('rewards')->insert([
            "a_name" => "增開六獎",
            "rule" => "統一發票末三位數號碼與中獎號碼之末三位完全相同者，獎金新臺幣兩百",
            "money" => "200",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
