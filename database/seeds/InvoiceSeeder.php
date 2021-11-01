<?php

use App\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'fk_order_id' => 1,
            'fk_invoice_status_id' => 3,
        ]);
    }
}
