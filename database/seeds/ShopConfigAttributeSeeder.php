<?php

use App\Shop_Config_Attribute;
use Illuminate\Database\Seeder;

class ShopConfigAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config_Attribute::create([
            'fk_shop_config_id' => 1,
            'name' => 'sale_message',
            'value' => '!!! Lorem 10% ipsum dolor sit amet, consetetur sadipscing elitr, sed diam !!!',
        ]);
    }
}
