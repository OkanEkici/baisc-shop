<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrdersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			
				DB::statement('ALTER TABLE orders MODIFY fk_customer_id BIGINT(20) UNSIGNED NULL;');
				
        Schema::table('orders', function (Blueprint $table) {
					 $table->unsignedBigInteger('fk_order_invoice_address')->nullable();
					 $table->unsignedBigInteger('fk_order_shipping_address')->nullable();
           $table->foreign('fk_order_invoice_address')->references('id')->on('orders_addresses');
           $table->foreign('fk_order_shipping_address')->references('id')->on('orders_addresses');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('orders', function (Blueprint $table) {
           $table->dropForeign(['fk_order_invoice_address']);
           $table->dropColumn('fk_order_invoice_address');
           $table->dropForeign(['fk_order_shipping_address']);
					 $table->dropColumn('fk_order_shipping_address');
        });

				DB::statement('ALTER TABLE orders MODIFY fk_customer_id BIGINT(20) UNSIGNED NULL;');
				
    }
}
