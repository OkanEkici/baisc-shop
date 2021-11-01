<?php

use App\OrderArticle_Status;
use Illuminate\Database\Seeder;

class OrderArticleStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderArticle_Status::create([
            'description' => 'open'
        ]);

        OrderArticle_Status::create([
            'description' => 'in_delivery'
        ]);

        OrderArticle_Status::create([
            'description' => 'delivered'
        ]);

        OrderArticle_Status::create([
            'description' => 'out_of_stock'
        ]);
    }
}
