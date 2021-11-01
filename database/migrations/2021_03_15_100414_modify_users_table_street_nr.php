<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTableStreetNr extends Migration
{
    public function up()
    {
        
		if (Schema::hasTable('users')) 
		{	Schema::table('users', function ($table) 
			{
				$table->string('street_nr')->nullable();
			});			
		}				
    }
		
    public function down()
    {        
		if (Schema::hasTable('users')) 
		{	Schema::table('users', function ($table) 
			{
				$table->dropColumn('street_nr');
			});			
		}				
    }
}
