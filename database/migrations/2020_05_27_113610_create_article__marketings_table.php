<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article__marketings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_article_id');
            $table->string('name');
            $table->dateTime('from')->nullable();
            $table->dateTime('until')->nullable();
            $table->boolean('active');
            $table->unsignedBigInteger('vstcl_id')->nullable();

        });

        Schema::table('article__marketings', function (Blueprint $table) {
            $table->foreign('fk_article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article__marketings');
    }
}
