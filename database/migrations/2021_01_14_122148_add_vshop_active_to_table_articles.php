<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVshopActiveToTableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->boolean('vsshop_active')->nullable();
            $table->boolean('vsshop_sale')->nullable();
            $table->boolean('vsshop_new')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('vsshop_active');
            $table->dropColumn('vsshop_sale');
            $table->dropColumn('vsshop_new');
        });
    }
}
