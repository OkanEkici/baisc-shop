<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyValueShopConfigAttributes extends Migration
{
    public function up()
    {
		DB::statement('ALTER TABLE shop__config__attributes MODIFY COLUMN value TEXT');
        //Schema::table('shop__config__attributes', function (Blueprint $table) { $table->text('value')->change(); });
    }
    public function down()
    {
		DB::statement('ALTER TABLE shop__config__attributes MODIFY COLUMN value STRING(255)');
        //Schema::table('shop__config__attributes', function (Blueprint $table) { $table->string('value')->change(); });
    }
}
