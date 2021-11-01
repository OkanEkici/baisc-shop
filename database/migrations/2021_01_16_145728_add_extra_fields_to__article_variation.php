<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsToArticleVariation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article__variations', function (Blueprint $table) {
            $table->string('vsshop_color',255)->nullable();
            $table->string('vsshop_size',255)->nullable();
            $table->string('vsshop_length',255)->nullable();
            $table->string('vsshop_length2',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article__variations', function (Blueprint $table) {
            $table->dropColumn('vsshop_color');
            $table->dropColumn('vsshop_size');
            $table->dropColumn('vsshop_length');
            $table->dropColumn('vsshop_length2');
        });
    }
}
