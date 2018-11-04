<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateturns');
            $table->string('hour',2);
            $table->string('minutes',2);
            $table->string('timezone',2);
            $table->integer('id_patient')->usigned()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->integer('id_user')->usigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');

            $table->integer('id_medic')->usigned()->nullable();
            $table->foreign('id_medic')->references('id')->on('users');
            $table->integer('id_status')->usigned()->nullable();
            $table->foreign('id_status')->references('id')->on('statusdates');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turns');
    }
}
