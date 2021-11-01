<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVstclIdAttributeGroups extends Migration
{
    public function up()
    { 
        Schema::table('attribute__groups', function (Blueprint $table) {
            $table->unsignedBigInteger('vstcl_id')->nullable();
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
            $table->dropColumn('vstcl_id');
        });
    }
}
