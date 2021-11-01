<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVstclIdArticleVariationImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article__variations', function (Blueprint $table) {
            $table->unsignedBigInteger('vstcl_id')->nullable();
        });

        Schema::table('article__variation__images', function (Blueprint $table) {
            $table->unsignedBigInteger('vstcl_id')->nullable();
        });

        Schema::table('article__variation__image__attributes', function (Blueprint $table) {
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
        Schema::table('article__variations', function (Blueprint $table) {
            $table->dropColumn('vstcl_id');
        });

        Schema::table('article__variation__images', function (Blueprint $table) {
            $table->dropColumn('vstcl_id');
        });

        Schema::table('article__variation__image__attributes', function (Blueprint $table) {
            $table->dropColumn('vstcl_id');
        });
    }
}
