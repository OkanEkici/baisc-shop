<?php

use App\Category_Image;
use Illuminate\Database\Seeder;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category_Image::create([
            'fk_category_id' => 1,
            'location' => 'test.png',
            'loaded' => true,
            'is_thumbnail' => true,
            'is_banner' => false,
        ]);

        Category_Image::create([
            'fk_category_id' => 1,
            'location' => 'test_banner.png',
            'loaded' => true,
            'is_thumbnail' => false,
            'is_banner' => true,
        ]);
    }
}
