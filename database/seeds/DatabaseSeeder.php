<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        #$this->call(CategorySeeder::class);
        #$this->call(CategoryImageSeeder::class);
        #$this->call(BrandSeeder::class);
        #$this->call(ArticleSeeder::class);
        #$this->call(ArticleAttributeSeeder::class);
        #$this->call(ArticleImageSeeder::class);
        #$this->call(ArticleImageAttributeSeeder::class);
        #$this->call(ArticlePriceSeeder::class);
        #$this->call(ArticleVariationSeeder::class);
        #$this->call(ArticleVariationAttributeSeeder::class);
        #$this->call(ArticleVariationPriceSeeder::class);
        #$this->call(ArticleVariationImageSeeder::class);
        #$this->call(ArticleVariationImageAttributeSeeder::class);
        $this->call(ShopConfigSeeder::class);
        $this->call(ShopConfigShipmentSeeder::class);
        $this->call(ShopConfigShipmentAttributeSeeder::class);
        $this->call(ShopConfigPaymentSeeder::class);
        $this->call(ShopConfigPaymentAttributeSeeder::class);
        $this->call(CustomerShopConfigPaymentSeeder::class);
        $this->call(CustomerShopConfigPaymentAttributeSeeder::class);
        $this->call(OrderStatusSeeder::class);
        #$this->call(OrderSeeder::class);
        $this->call(OrderArticleStatusSeeder::class);
        #$this->call(OrderArticleSeeder::class);
        #$this->call(OrderArticleAttributeSeeder::class);
        $this->call(InvoiceStatusSeeder::class);
        #$this->call(InvoiceSeeder::class);
        #$this->call(PaymentSeeder::class);
        #$this->call(ArticleCustomerReviewSeeder::class);
    }
}
