<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'organisation_or_person' => 'person',
            'organisation_name' => null,
            'gender' => 'male',
            'first_name' => 'Lukas',
            'last_name' => 'Möller',
            'email_address' => 'moeller@visc-media.de',
            'login_name' => 'moeller',
            'login_password' => Hash::make('moeller'),
            'phone_number' => '+4912345678910',
            'street' => 'Teststraße 1',
            'postcode' => '12345',
            'city' => 'Berlin',
            'county' => 'Berlin',
            'country' => 'DE',
            'additional_address_info' => null
        ]);
    }
}
