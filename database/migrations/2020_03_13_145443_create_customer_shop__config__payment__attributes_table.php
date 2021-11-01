<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerShopConfigPaymentAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_shop__config__payment__attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_customershop_config_payment_id');
            $table->string('name');
            $table->string('value');
        });

        Schema::table('customer_shop__config__payment__attributes', function (Blueprint $table) {
            $table->foreign('fk_customershop_config_payment_id', 'fk_cscpay_id')->references('id')->on('customer_shop__config__payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_shop__config__payment__attributes');
    }
}
