	<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',10)->unique();
            $table->string('name',20);
            $table->string('lastname',20);
            $table->date('birthday')->nullable();
            $table->string('address',30)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_role')->usigned()->nullable();
            $table->foreign('id_role')->references('id')->on('roles');
            $table->integer('id_user');
            $table->integer('id_specialty')->usigned()->nullable();
            $table->foreign('id_specialty')->references('id')->on('specialties');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
