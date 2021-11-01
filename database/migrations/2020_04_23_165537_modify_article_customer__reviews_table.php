<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyArticleCustomerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
				DB::statement('ALTER TABLE article_customer__reviews MODIFY fk_order_id BIGINT(20) UNSIGNED NULL;');
				
        Schema::table('article_customer__reviews', function (Blueprint $table) {
            $table->string('title');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
				DB::statement('ALTER TABLE article_customer__reviews MODIFY fk_order_id BIGINT(20) UNSIGNED NOT NULL;');
				
        Schema::table('article_customer__reviews', function (Blueprint $table) {
            $table->dropColumn('title');
        });

    }
}
