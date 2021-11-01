<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lukas Möller',
            'email' => 'moeller@visc-media.de',
            'password' => Hash::make('moeller'),
            'organisation_or_person' => 'person',
            'organisation_name' => null,
            'gender' => 'male',
            'first_name' => 'Lukas',
            'last_name' => 'Möller',
            'phone_number' => '+4912345678910',
            'street' => 'Teststraße 1',
            'postcode' => '12345',
            'city' => 'Berlin',
            'county' => 'Berlin',
            'country' => 'DE',
            'additional_address_info' => null
        ]);
        User::create([
            'name' => 'Hanns Nölle',
            'email' => 'noelle@noelle-it.de',
            'password' => Hash::make('geheim'),
            'organisation_or_person' => 'organisation',
            'organisation_name' => 'NOELLE IT',
            'gender' => 'male',
            'first_name' => 'Hanns',
            'last_name' => 'Nölle',
            'phone_number' => '',
            'street' => '',
            'postcode' => '',
            'city' => '',
            'county' => '',
            'country' => 'DE',
            'additional_address_info' => null
        ]);
    }
}
