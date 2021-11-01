<?php

use App\Article_Variation_Image_Attribute;
use Illuminate\Database\Seeder;

class ArticleVariationImageAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Variation_Image_Attribute::create([
            'fk_article_variation_image_id' => 1,
            'name' => 'position',
            'value' => 0,
        ]);

        Article_Variation_Image_Attribute::create([
            'fk_article_variation_image_id' => 1,
            'name' => 'thumbnail',
            'value' => 1,
        ]);
    }
}
