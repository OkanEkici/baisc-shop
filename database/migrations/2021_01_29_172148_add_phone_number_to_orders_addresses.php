<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneNumberToOrdersAddresses extends Migration
{
    public function up()
    {
        Schema::table('orders_addresses', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
        });
    }
	
    public function down()
    {
        Schema::table('orders_addresses', function (Blueprint $table) {
            $table->dropColumn('phone_number');
        });
    }
}
