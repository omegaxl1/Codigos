<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRconsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rconsultations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('reason');
            $table->integer('id_vitalg')->usigned()->nullable();
            $table->foreign('id_vitalg')->references('id')->on('vitalsigns');
            $table->integer('id_exploregions')->usigned()->nullable();
            $table->foreign('id_exploregions')->references('id')->on('exploregions');
            $table->integer('id_diagnosi')->usigned()->nullable();
            $table->foreign('id_diagnosi')->references('id')->on('diagnosis');
            $table->integer('id_evolu')->usigned()->nullable();
            $table->foreign('id_evolu')->references('id')->on('evolutions');
            $table->integer('id_patient')->usigned()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->integer('id_user')->usigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('rconsultations');
    }
}
