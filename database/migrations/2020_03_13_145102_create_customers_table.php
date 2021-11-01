<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->enum('organisation_or_person', ['organisation', 'person']);
            $table->string('organisation_name')->nullable();
            $table->enum('gender', ['male','woman','diverse']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('login_name');
            $table->string('login_password');
            $table->string('phone_number');
            $table->string('street');
            $table->string('postcode');
            $table->string('city');
            $table->string('county');
            $table->string('country');
            $table->string('additional_address_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
