<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExploregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exploregions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_head')->usigned()->nullable();
            $table->foreign('id_head')->references('id')->on('cpsps');
            $table->integer('id_eyes')->usigned()->nullable();
            $table->foreign('id_eyes')->references('id')->on('cpsps');
            $table->integer('id_ears')->usigned()->nullable();
            $table->foreign('id_ears')->references('id')->on('cpsps');
            $table->integer('id_nose')->usigned()->nullable();
            $table->foreign('id_nose')->references('id')->on('cpsps');
            $table->integer('id_mouthpharynx')->usigned()->nullable();
            $table->foreign('id_mouthpharynx')->references('id')->on('cpsps');
            $table->integer('id_neck')->usigned()->nullable();
            $table->foreign('id_neck')->references('id')->on('cpsps');
            $table->integer('id_cardiopulmonary')->usigned()->nullable();
            $table->foreign('id_cardiopulmonary')->references('id')->on('cpsps');
            $table->integer('id_nervousystem')->usigned()->nullable();
            $table->foreign('id_nervousystem')->references('id')->on('cpsps');
            $table->integer('id_abdomen')->usigned()->nullable();
            $table->foreign('id_abdomen')->references('id')->on('cpsps');
            $table->integer('id_extremities')->usigned()->nullable();
            $table->foreign('id_extremities')->references('id')->on('cpsps');
            $table->text('details',150);
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
        Schema::dropIfExists('exploregions');
    }
}
