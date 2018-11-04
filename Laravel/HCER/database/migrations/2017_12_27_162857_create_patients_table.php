<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',10)->unique();
            $table->string('namef',50);
            $table->string('namel',50);
            $table->date('birthday')->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',20); 
            $table->string('occupation',25)->nullable(); 
            $table->integer('id_contact')->usigned()->nullable();
            $table->foreign('id_contact')->references('id')->on('contacts');
            $table->string('namecontact',30)->nullable();
            $table->string('contphone',20)->nullable(); 
            $table->string('email')->unique()->nullable();
            $table->integer('id_gender')->usigned()->nullable();
            $table->foreign('id_gender')->references('id')->on('genders');
            $table->integer('id_bloodtype')->usigned()->nullable();
            $table->foreign('id_bloodtype')->references('id')->on('bloodtypes');
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
        Schema::dropIfExists('patients');
    }
}
