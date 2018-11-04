<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalsignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitalsigns', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('heartrate',5,2)->nullable();
            $table->decimal('head_circunference',5,2)->nullable();
            $table->decimal('bloodpressure',5,2)->nullable();
            $table->decimal('weight',5,2)->nullable();
            $table->decimal('breathingfrequency',5,2)->nullable();
            $table->decimal('temperature',5,2)->nullable();
            $table->decimal('oxygensaturation',5,2)->nullable();
            $table->decimal('size',5,2)->nullable();
            $table->integer('id_ims')->usigned()->nullable();
            $table->foreign('id_ims')->references('id')->on('ims');
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
        Schema::dropIfExists('vitalsigns');
    }
}
