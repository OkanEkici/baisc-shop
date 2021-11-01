<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsAttributeGroups extends Migration
{
    public function up()
    { 
        Schema::table('attribute__groups', function (Blueprint $table) {
            $table->tinyInteger('main_group')->nullable();
			$table->tinyInteger('is_filterable')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute__groups', function (Blueprint $table) {
            $table->dropColumn('main_group');
			$table->dropColumn('is_filterable');
        });
    }
}
