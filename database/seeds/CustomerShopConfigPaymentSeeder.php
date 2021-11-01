<?php

use App\CustomerShop_Config_Payment;
use Illuminate\Database\Seeder;

class CustomerShopConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerShop_Config_Payment::create([
            'fk_customer_id' => 1,
            'fk_shop_config_payment_id' => 1,
        ]);
    }
}
