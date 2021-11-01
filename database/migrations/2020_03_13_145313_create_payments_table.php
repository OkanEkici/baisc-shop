<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('fk_invoice_id');
            $table->unsignedBigInteger('fk_shop_config_payment_id');
            $table->dateTime('payment_date');
            $table->double('payment_amount');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('fk_invoice_id')->references('id')->on('invoices');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('fk_shop_config_payment_id', 'fk_scpay_id_pays')->references('id')->on('shop__config__payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
