<?php

use App\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'fk_invoice_id' => 1,
            'fk_shop_config_payment_id' =>  1,
            'payment_date' => '2020-03-13 19:31:02',
            'payment_amount' => 5697,
        ]);
    }
}
