<?php

use App\Article_Image_Attribute;
use Illuminate\Database\Seeder;

class ArticleImageAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Image_Attribute::create([
            'fk_article_image_id' => 1,
            'name' => 'position',
            'value' => '0',
        ]);
    }
}
