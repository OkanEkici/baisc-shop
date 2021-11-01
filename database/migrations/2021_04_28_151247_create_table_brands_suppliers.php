<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBrandsSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_suppliers', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();

            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('fk_brand_id');
            $table->string('hersteller-nr');

            $table->string('hersteller_name')->nullable();

            $table->foreign('fk_brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands_suppliers');
    }
}
