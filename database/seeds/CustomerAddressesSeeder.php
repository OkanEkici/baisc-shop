<?php

use App\CustomerAddresses;
use Illuminate\Database\Seeder;

class CustomerAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerAddresses::create([
            'fk_customer_id' => 2,
            'name' => 'Schwelm 1',
            'street' => 'Teststraße 1',
            'postcode' => '12345',
            'city' => 'Berlin',
            'county' => 'Berlin',
            'country' => 'DE',
            'additional_address_info' => null
        ]);
    }
}
