<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToArticleVariations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('article__variations', function (Blueprint $table) {
            $table->index('vsshop_color');
            $table->index('vsshop_size');
            $table->index('vsshop_length');
            $table->index('vsshop_length2');
            $table->index(['vsshop_length','vsshop_length2']);
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
            $table->dropIndex('vsshop_color');
            $table->dropIndex('vsshop_size');
            $table->dropIndex('vsshop_length');
            $table->dropIndex('vsshop_length2');
            $table->dropIndex(['vsshop_length','vsshop_length2']);
        });
    }

}
