<?php

use App\Shop_Config_Payment_Attribute;
use Illuminate\Database\Seeder;

class ShopConfigPaymentAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config_Payment_Attribute::create([
            'fk_shop_config_payment_id' => 1,
            'name' => 'paypal_api_key',
            'value' => '123456789101112'
        ]);
    }
}
