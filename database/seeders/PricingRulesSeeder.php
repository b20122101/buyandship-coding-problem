<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PricingRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricing_rules')->insert([
            'fixed_fee' => 0,
            'base_weight_range' => 0,
            'extra_weight_fee' => 10,
        ]);

        DB::table('pricing_rules')->insert([
            'fixed_fee' => 15,
            'base_weight_range' => 2,
            'extra_weight_fee' => 3,
        ]);

        DB::table('pricing_rules')->insert([
            'fixed_fee' => 20,
            'base_weight_range' => 3,
            'extra_weight_fee' => 6,
        ]);
    }
}
