<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('business_name');
            $table->string('street');
            $table->string('postcode');
            $table->string('city');
            $table->string('tel');
            $table->string('contact_email');
            $table->string('vstcl_licence_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop__configs');
    }
}
