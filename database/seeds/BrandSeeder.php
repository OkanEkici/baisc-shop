<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Esprit',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'esprit',
        ]);

        Brand::create([
            'name' => 'Zara',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'zara',
        ]);

        Brand::create([
            'name' => 'Reebok',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'reebok',
        ]);

        Brand::create([
            'name' => 'Calvin Klein',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'calvin-klein',
        ]);

        Brand::create([
            'name' => 'ONLY',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'only',
        ]);

        Brand::create([
            'name' => 'Mango',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam',
            'slug' => 'mango',
        ]);
    }
}
