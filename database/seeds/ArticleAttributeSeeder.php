<?php

use App\Article_Attribute;
use Illuminate\Database\Seeder;

class ArticleAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Attribute::create([
            'fk_article_id' => 1,
            'name' => 'size',
            'value' => '52',
        ]);

        Article_Attribute::create([
            'fk_article_id' => 1,
            'name' => 'color',
            'value' => 'jeansblau',
        ]);
    }
}
