<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToArticles extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
    */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->index('vsshop_brand');
            $table->index('vsshop_sale');
            $table->index('vsshop_new');
            $table->index('vsshop_active');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
    */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropIndex('vsshop_brand');
            $table->dropIndex('vsshop_sale');
            $table->dropIndex('vsshop_new');
            $table->dropIndex('vsshop_active');
        });
    }

}

