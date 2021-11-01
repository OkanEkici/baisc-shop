<?php

use App\Article_Price;
use Illuminate\Database\Seeder;

class ArticlePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Price::create([
            'fk_article_id' => 1,
            'name' => 'standard',
            'value' => 1899,
        ]);

        Article_Price::create([
            'fk_article_id' => 2,
            'name' => 'standard',
            'value' => 11999,
        ]);

        Article_Price::create([
            'fk_article_id' => 3,
            'name' => 'standard',
            'value' => 189099,
        ]);

        Article_Price::create([
            'fk_article_id' => 4,
            'name' => 'standard',
            'value' => 2199,
        ]);

        Article_Price::create([
            'fk_article_id' => 5,
            'name' => 'standard',
            'value' => 999,
        ]);

        Article_Price::create([
            'fk_article_id' => 6,
            'name' => 'standard',
            'value' => 1899,
        ]);

        Article_Price::create([
            'fk_article_id' => 7,
            'name' => 'standard',
            'value' => 3399,
        ]);

        Article_Price::create([
            'fk_article_id' => 8,
            'name' => 'standard',
            'value' => 1999,
        ]);

        Article_Price::create([
            'fk_article_id' => 9,
            'name' => 'standard',
            'value' => 1899,
        ]);

        Article_Price::create([
            'fk_article_id' => 1,
            'name' => 'sale',
            'value' => 1399,
        ]);
    }
}
