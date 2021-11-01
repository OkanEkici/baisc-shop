<?php

use App\OrderArticle;
use Illuminate\Database\Seeder;

class OrderArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderArticle::create([
            'fk_article_id' => 1,
            'fk_article_variation_id' =>  null,
            'fk_order_id' => 1,
            'fk_orderarticle_status_id' => 1,
            'quantity' => 3,
            'price' => 5697
        ]);
    }
}
