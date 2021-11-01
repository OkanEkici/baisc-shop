<?php

use App\Order_Status;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_Status::create([
            'description' => 'open'
        ]);

        Order_Status::create([
            'description' => 'on_hold'
        ]);

        Order_Status::create([
            'description' => 'canceled'
        ]);

        Order_Status::create([
            'description' => 'completed'
        ]);
    }
}
