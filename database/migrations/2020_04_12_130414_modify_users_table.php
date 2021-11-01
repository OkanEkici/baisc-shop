<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
				if (Schema::hasTable('users')) {
					
					Schema::table('users', function ($table) {
            $table->enum('organisation_or_person', ['organisation', 'person'])->default('person');
            $table->string('organisation_name')->nullable();
            $table->enum('gender', ['male','woman','diverse'])->default('diverse');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('street')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable()->default('DE');
            $table->string('additional_address_info')->nullable();
					});
					
				}
				
    }
		
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
				if (Schema::hasTable('users')) {
					
					Schema::table('users', function ($table) {
						$table->dropColumn('organisation_or_person');
						$table->dropColumn('organisation_name');
						$table->dropColumn('gender');
						$table->dropColumn('first_name');
						$table->dropColumn('last_name');
						$table->dropColumn('phone_number');
						$table->dropColumn('street');
						$table->dropColumn('postcode');
						$table->dropColumn('city');
						$table->dropColumn('county');
						$table->dropColumn('country');
						$table->dropColumn('additional_address_info');
					});
					
				}
				
    }
}
