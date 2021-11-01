<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVstclIdCategoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category__images', function (Blueprint $table) {
            $table->unsignedBigInteger('vstcl_id')->nullable();
        });

        Schema::table('brands', function (Blueprint $table) {
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
        Schema::table('category__images', function (Blueprint $table) {
            $table->dropColumn('vstcl_id');
        });

        Schema::table('brands', function (Blueprint $table) {
            $table->dropColumn('vstcl_id');
        });
    }
}
