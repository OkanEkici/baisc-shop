<?php

use App\Article_Variation_Attribute;
use Illuminate\Database\Seeder;

class ArticleVariationAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Variation_Attribute::create([
            'fk_article_variation_id' => 1,
            'name' => 'size',
            'value' => 38,
        ]);

        Article_Variation_Attribute::create([
            'fk_article_variation_id' => 1,
            'name' => 'color',
            'value' => 'rot',
        ]);
    }
}
