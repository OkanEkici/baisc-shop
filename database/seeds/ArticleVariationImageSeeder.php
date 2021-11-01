<?php

use App\Article_Variation_Image;
use Illuminate\Database\Seeder;

class ArticleVariationImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Variation_Image::create([
            'fk_article_variation_id' => 1,
            'location' => 'test_variation.png',
            'loaded' => true
        ]);
    }
}
