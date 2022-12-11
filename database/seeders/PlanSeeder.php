<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
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
                'name' => 'Basic',
                'slug' => 'basic',
                'stripe_plan' => 'price_1MDEChG5OSCRQdIzr4670arQ',
                'price' => 10,
                'description' => 'Basic'
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
