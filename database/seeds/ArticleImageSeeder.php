<?php

use App\Article_Image;
use Illuminate\Database\Seeder;

class ArticleImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Image::create([
            'fk_article_id' => 1,
            'location' => 'test_article.png',
            'loaded' => true,
        ]);
    }
}
