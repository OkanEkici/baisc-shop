<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_customer_id');
            $table->unsignedBigInteger('fk_order_status_id');
            $table->unsignedBigInteger('fk_shop_config_shipment_id');
            $table->unsignedBigInteger('fk_shop_config_payment_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('fk_customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('fk_order_status_id')->references('id')->on('order__statuses');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('fk_shop_config_shipment_id', 'fk_scship_id_orders')->references('id')->on('shop__config__shipments');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('fk_shop_config_payment_id', 'fk_scpay_id_orders')->references('id')->on('shop__config__payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
