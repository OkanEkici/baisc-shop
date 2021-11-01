<?php

use App\Shop_Config_Shipment_Attribute;
use Illuminate\Database\Seeder;

class ShopConfigShipmentAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config_Shipment_Attribute::create([
            'fk_shop_config_shipment_id' => 1,
            'name' => 'description',
            'value' => 'DHL Standardversand - 3 Tage'
        ]);

        Shop_Config_Shipment_Attribute::create([
            'fk_shop_config_shipment_id' => 1,
            'name' => 'price',
            'value' => '399'
        ]);

        Shop_Config_Shipment_Attribute::create([
            'fk_shop_config_shipment_id' => 2,
            'name' => 'description',
            'value' => 'Abholung'
        ]);

        Shop_Config_Shipment_Attribute::create([
            'fk_shop_config_shipment_id' => 2,
            'name' => 'price',
            'value' => '0'
        ]);
    }
}
