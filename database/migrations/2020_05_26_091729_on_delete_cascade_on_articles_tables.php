<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OnDeleteCascadeOnArticlesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article__variation__image__attributes', function (Blueprint $table) {
            $table->dropForeign('fk_avimg_id');
            $table->foreign('fk_article_variation_image_id', 'fk_avimg_id')
                ->references('id')->on('article__variation__images')
                ->onDelete('cascade');
        });

        Schema::table('article__variation__images', function (Blueprint $table) {
            $table->dropForeign(['fk_article_variation_id']);
            $table->foreign('fk_article_variation_id',)
                ->references('id')->on('article__variations')
                ->onDelete('cascade');
        });

        Schema::table('article__variation__prices', function (Blueprint $table) {
            $table->dropForeign(['fk_article_variation_id']);
            $table->foreign('fk_article_variation_id',)
                ->references('id')->on('article__variations')
                ->onDelete('cascade');
        });

        Schema::table('article__variation__attributes', function (Blueprint $table) {
            $table->dropForeign(['fk_article_variation_id']);
            $table->foreign('fk_article_variation_id',)
                ->references('id')->on('article__variations')
                ->onDelete('cascade');
        });

        Schema::table('article__image__attributes', function (Blueprint $table) {
            $table->dropForeign(['fk_article_image_id']);
            $table->foreign('fk_article_image_id')
                ->references('id')->on('article__images')
                ->onDelete('cascade');
        });

        Schema::table('article__images', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles')
                ->onDelete('cascade');
        });

        Schema::table('article__prices', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles')
                ->onDelete('cascade');
        });

        Schema::table('article__attributes', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles')
                ->onDelete('cascade');
        });

        Schema::table('article__variations', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article__variation__image__attributes', function (Blueprint $table) {
            $table->dropForeign('fk_avimg_id');
            $table->foreign('fk_article_variation_image_id', 'fk_avimg_id')
                ->references('id')->on('article__variation__images');
        });

        Schema::table('article__variation__images', function (Blueprint $table) {
            $table->dropForeign(['fk_article_variation_id']);
            $table->foreign('fk_article_variation_id',)
                ->references('id')->on('article__variations');
        });

        Schema::table('article__variation__prices', function (Blueprint $table) {
            $table->dropForeign(['fk_article_variation_id']);
            $table->foreign('fk_article_variation_id',)
                ->references('id')->on('article__variations');
        });

        Schema::table('article__image__attributes', function (Blueprint $table) {
            $table->dropForeign(['fk_article_image_id']);
            $table->foreign('fk_article_image_id')
                ->references('id')->on('article__images');
        });

        Schema::table('article__images', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles');
        });

        Schema::table('article__prices', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles');
        });

        Schema::table('article__attributes', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles');
        });

        Schema::table('article__variations', function (Blueprint $table) {
            $table->dropForeign(['fk_article_id']);
            $table->foreign('fk_article_id')
                ->references('id')->on('articles');
        });

    }
}
