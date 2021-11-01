<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopConfigShipmentAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__config__shipment__attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_shop_config_shipment_id');
            $table->string('name');
            $table->string('value');
        });

        Schema::table('shop__config__shipment__attributes', function (Blueprint $table) {
            $table->foreign('fk_shop_config_shipment_id','fk_scship_id')->references('id')->on('shop__config__shipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop__config__shipment__attributes');
    }
}
