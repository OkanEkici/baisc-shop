<?php

use App\Article_Variation;
use Illuminate\Database\Seeder;

class ArticleVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Variation::create([
            'fk_article_id' => 1,
            'vstcl_identifier' => 'vstcl-1-1',
            'active' => true,
            'ean' => '21424',
            'name' => null,
            'description' => null,
        ]);
    }
}
