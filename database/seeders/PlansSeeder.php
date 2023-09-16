<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'شهر',
                'days' => '30',
                'amount' => '100',
            ],
            [
                'name' => '3 شهور',
                'days' => '90',
                'amount' => '200',
            ],
            [
                'name' => '6 شهور',
                'days' => '180',
                'amount' => '300',
            ],
            [
                'name' => 'سنة',
                'days' => '365',
                'amount' => '500',
            ],
            // Add more plans as needed
        ];

        Plan::insert($plans);
    }
}
