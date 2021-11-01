<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			
        Schema::table('customer_addresses', function (Blueprint $table) {
					 $table->string('first_name')->default('');
					 $table->string('last_name')->default('');
					 $table->enum('gender', ['male','woman','diverse'])->default('diverse');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('customer_addresses', function (Blueprint $table) {
					 $table->dropColumn('first_name');
					 $table->dropColumn('last_name');
					 $table->dropColumn('gender');
        });
				
    }
}
