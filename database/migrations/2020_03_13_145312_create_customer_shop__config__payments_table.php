<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerShopConfigPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_shop__config__payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_customer_id');
            $table->unsignedBigInteger('fk_shop_config_payment_id');
        });

        Schema::table('customer_shop__config__payments', function (Blueprint $table) {
            $table->foreign('fk_customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('customer_shop__config__payments', function (Blueprint $table) {
            $table->foreign('fk_shop_config_payment_id', 'fk_scppay_id_csconf')->references('id')->on('shop__config__payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_shop__config__payments');
    }
}
