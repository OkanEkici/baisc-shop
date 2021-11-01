<?php

use App\Shop_Config;
use Illuminate\Database\Seeder;

class ShopConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop_Config::create([
            'business_name' => 'Wildhardt Mode',
            'street' => 'Beispielstraße 123',
            'postcode' => '12345',
            'city' => 'Berlin',
            'tel' => '+49123456789',
            'contact_email' => 'test@example.com',
            'vstcl_licence_key' => '12345-vst-6789101-cl-1121314'
        ]);
    }
}
