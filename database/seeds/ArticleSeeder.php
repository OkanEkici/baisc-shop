<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'name' => 'Moderne Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'ean' => '12345',
            'slug' => 'moderne-hose',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);
        
        $article = Article::find(1);
        $article->categories()->attach(2);

        Article::create([
            'name' => 'Altmodische Jeans',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'altmodische-jeans',
            'ean' => '1234sdf5',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'Test Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'test-hose',
            'ean' => '1234vbn5',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'Coole Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'coole-hose',
            'ean' => '12fdh345',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'iHose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'ihose',
            'ean' => '1234345g5',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'Neue Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'neue-hose',
            'ean' => '12345nbvcn',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'Cargo Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'cargo-hose',
            'ean' => '12376hnc45',
            'fk_brand_id' => 1,
        ])->categories()->attach(7);

        Article::create([
            'name' => 'Stoff Hose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'stoff-hose',
            'ean' => '123455342ggd',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);

        Article::create([
            'name' => 'Lederhose',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
            'active' => true,
            'vstcl_identifier' => 'vstcl-1',
            'slug' => 'lederhose',
            'ean' => '123435dsdfgs4ta45',
            'fk_brand_id' => 1,
        ])->categories()->attach(1);
    }
}
