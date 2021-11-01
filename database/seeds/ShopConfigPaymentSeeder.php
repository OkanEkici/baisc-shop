<?php

use App\Shop_Config_Payment;
use Illuminate\Database\Seeder;

class ShopConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config_Payment::create([
            'fk_shop_config_id' => 1,
            'payment_key' => 'PayPal',
            'active' => true
        ]);

        Shop_Config_Payment::create([
            'fk_shop_config_id' => 1,
            'payment_key' => 'Vorkasse',
            'active' => true
        ]);

        Shop_Config_Payment::create([
            'fk_shop_config_id' => 1,
            'payment_key' => 'Bezahlung auf Rechnung',
            'active' => true
        ]);
    }
}
