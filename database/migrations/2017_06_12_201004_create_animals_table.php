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
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('race_id')->unsigned()->nullable();
            
            

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('race_id')->references('id')->on('races');
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
