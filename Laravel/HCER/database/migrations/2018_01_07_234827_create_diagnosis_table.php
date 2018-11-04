<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pers_1')->usigned()->nullable();
            $table->foreign('id_pers_1')->references('id')->on('cis10s');
            $table->integer('id_pers_2')->usigned()->nullable();
            $table->foreign('id_pers_2')->references('id')->on('cis10s');
            $table->integer('id_pers_3')->usigned()->nullable();
            $table->foreign('id_pers_3')->references('id')->on('cis10s');
            $table->integer('id_def_1')->usigned()->nullable();
            $table->foreign('id_def_1')->references('id')->on('cis10s');
            $table->integer('id_def_2')->usigned()->nullable();
            $table->foreign('id_def_2')->references('id')->on('cis10s');
            $table->integer('id_def_3')->usigned()->nullable();
            $table->foreign('id_def_3')->references('id')->on('cis10s');
            $table->text('treatment');
            $table->text('recipe');
            $table->text('instructions');
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
        Schema::dropIfExists('diagnosis');
    }
}
