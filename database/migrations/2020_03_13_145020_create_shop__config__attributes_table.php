<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopConfigAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__config__attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_shop_config_id');
            $table->string('name');
            $table->string('value');
        });

        Schema::table('shop__config__attributes', function (Blueprint $table) {
            $table->foreign('fk_shop_config_id')->references('id')->on('shop__configs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop__config__attributes');
    }
}
