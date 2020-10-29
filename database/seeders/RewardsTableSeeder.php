<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RewardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rewards')->insert([
            "a_name" => "超特別獎",
            "rule" => "發票八位數號碼與中獎號碼完全相同者，獎金新臺幣一千兆",
            "money" => "10000000"
        ]);
    }
}
