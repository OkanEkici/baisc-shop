<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Hosen',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => null,
            'slug' => 'hosen',
        ]);

        Category::create([
            'name' => 'Blusen',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => null,
            'slug' => 'blusen',
        ]);

        Category::create([
            'name' => 'Jeans',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => 1,
            'slug' => 'jeans',
        ]);

        Category::create([
            'name' => 'Kurze Jeans',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => 3,
            'slug' => 'kurze-jeans',
        ]);

        Category::create([
            'name' => 'Moderne Bluse',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => 2,
            'slug' => 'moderne-bluse',
        ]);

        Category::create([
            'name' => 'Cargohosen',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => 1,
            'slug' => 'cargohosen',
        ]);

        Category::create([
            'name' => 'Moderne Cargohosen',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea',
            'parent_category_id' => 6,
            'slug' => 'moderne-cargohosen',
        ]);
    }
}
