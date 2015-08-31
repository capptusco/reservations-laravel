<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();
            $table->string('description');
            $table->integer('duration');
            $table->boolean('active');
            
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
        Schema::drop('services');
    }
}
