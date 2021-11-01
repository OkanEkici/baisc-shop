<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCustomerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_customer__reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_article_id');
            $table->unsignedBigInteger('fk_customer_id');
            $table->unsignedBigInteger('fk_order_id');
            $table->integer('stars');
            $table->string('text');
            $table->boolean('verified');
        });

        Schema::table('article_customer__reviews', function (Blueprint $table) {
            $table->foreign('fk_article_id')->references('id')->on('articles');
        });

        Schema::table('article_customer__reviews', function (Blueprint $table) {
            $table->foreign('fk_customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('article_customer__reviews', function (Blueprint $table) {
            $table->foreign('fk_order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_customer__reviews');
    }
}
