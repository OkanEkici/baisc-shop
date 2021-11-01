<?php

use App\Invoice_Status;
use Illuminate\Database\Seeder;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice_Status::create([
            'description' => 'created'
        ]);

        Invoice_Status::create([
            'description' => 'issued'
        ]);

        Invoice_Status::create([
            'description' => 'paid'
        ]);
    }
}
