<?php

use App\Shop_Config_Shipment;
use Illuminate\Database\Seeder;

class ShopConfigShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config_Shipment::create([
            'fk_shop_config_id' => 1,
            'shipment_key' => 'Standard DHL',
            'active' => true,
        ]);

        Shop_Config_Shipment::create([
            'fk_shop_config_id' => 1,
            'shipment_key' => 'Abholung',
            'active' => true,
        ]);
    }
}
