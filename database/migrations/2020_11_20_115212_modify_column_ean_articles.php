<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnEanArticles extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropUnique('articles_ean_unique');            
        });
    }
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('ean')->unique();
        });
    }
}
