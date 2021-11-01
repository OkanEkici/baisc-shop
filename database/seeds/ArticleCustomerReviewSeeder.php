<?php

use App\ArticleCustomer_Review;
use Illuminate\Database\Seeder;

class ArticleCustomerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCustomer_Review::create([
            'fk_article_id' => 1,
            'fk_customer_id' => 1,
            'fk_order_id' => 1,
            'stars' => 4,
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
            'verified' => true,
        ]);
    }
}
