<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientanamnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientanamnes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('allergies')->nullable();
            $table->text('p_pathologies')->nullable();
            $table->text('f_pathologies')->nullable();
            $table->text('surgical')->nullable();
            $table->string('alcohol',30)->nullable();
            $table->string('smoking',30)->nullable();
            $table->string('drugs',30)->nullable();
            $table->string('inmunizaciones',30)->nullable();
            $table->text('others')->nullable();
            $table->integer('id_patient')->usigned()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->integer('id_user')->usigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('patientanamnes');
    }
}
