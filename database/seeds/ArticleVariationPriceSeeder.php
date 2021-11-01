<?php

use App\Article_Variation_Price;
use Illuminate\Database\Seeder;

class ArticleVariationPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Variation_Price::create([
            'fk_article_variation_id' => 1,
            'name' => 'standard',
            'value' => 1999,
        ]);
    }
}
