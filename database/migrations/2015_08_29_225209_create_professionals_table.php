<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();

            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('name');
            $table->string('phone_number');
            $table->string('address');
            
            

            $table->integer('custom_number1')->nullable();
            $table->integer('custom_number2')->nullable();
            $table->integer('custom_number3')->nullable();
            
            $table->string('custom_char1')->nullable();
            $table->string('custom_char2')->nullable();
            $table->string('custom_char3')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('professionals');
    }
}
