<?php

use App\CustomerShop_Config_Payment_Attribute;
use Illuminate\Database\Seeder;

class CustomerShopConfigPaymentAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerShop_Config_Payment_Attribute::create([
            'fk_customershop_config_payment_id' => 1,
            'name' => 'paypal_email',
            'value' => 'moeller@visc-media.de',
        ]);
    }
}
