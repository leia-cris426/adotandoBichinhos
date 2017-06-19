<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo', 1);
            $table->char('porte', 1);
            $table->integer('idade');
            $table->tinyInteger('status');
            $table->timestamps();
            
            $table->integer('user_id')->unsigned();
            $table->integer('race_id')->unsigned();
            
            

            $table->foreign('user_id')->references('users')->on('id');
            $table->foreign('race_id')->references('races')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
