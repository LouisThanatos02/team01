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
            "period_name" => "2000102",
            "a_ID" => "1",
            "number" => "09530169"
        ]);
    }
}
