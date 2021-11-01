<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'fk_customer_id' => 1,
            'fk_order_status_id' => 1,
            'fk_shop_config_shipment_id' => 1,
            'fk_shop_config_payment_id' => 1,
        ]);

        Order::create([
            'fk_customer_id' => 1,
            'fk_order_status_id' => 4,
            'fk_shop_config_shipment_id' => 1,
            'fk_shop_config_payment_id' => 1,
        ]);

        Order::create([
            'fk_customer_id' => 1,
            'fk_order_status_id' => 3,
            'fk_shop_config_shipment_id' => 1,
            'fk_shop_config_payment_id' => 1,
        ]);
    }
}
