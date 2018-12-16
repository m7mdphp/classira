<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_num');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('group');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('grandfather_name');
            $table->string('family_name');
            $table->string('arabic_name');
            $table->integer('gender');
            $table->date('born_date');
            $table->string('born_place');
            $table->text('adress');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('login');
            $table->string('nation');
            $table->string('school');


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
        Schema::dropIfExists('admins');
    }
}
