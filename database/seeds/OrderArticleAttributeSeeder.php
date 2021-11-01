<?php

use App\OrderArticle_Attribute;
use Illuminate\Database\Seeder;

class OrderArticleAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderArticle_Attribute::create([
            'fk_orderarticle_id' => 1,
            'name' => 'as_present',
            'value' => '1',
        ]);
    }
}
