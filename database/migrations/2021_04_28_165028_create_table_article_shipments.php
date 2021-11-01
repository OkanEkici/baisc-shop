<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticleShipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_shipments', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();

            $table->bigIncrements('id');
            $table->unsignedBigInteger('vstcl_id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_article_id');
            $table->float('price');
            $table->string('time');
            $table->string('description');


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
        Schema::dropIfExists('article_shipments');
    }
}
