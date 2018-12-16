<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_num');
            $table->string('passport');
            $table->string('file');
            $table->string('enter_year');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('grandfather_name');
            $table->string('family_name');
            $table->string('arabic_name');
            $table->integer('gender');
            $table->date('born_date');
            $table->string('born_place');
            $table->string('arabic_born_place');
            $table->text('adress');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('nation');
            $table->string('semester');
            $table->string('class');
            $table->string('ex_school');
            $table->string('arabic_ex_school');
            $table->date('enter_date');
            $table->integer('father_account');
            $table->integer('mother_account');
            $table->string('image');
            $table->integer('reports');
            $table->integer('login');
            $table->integer('welcome');
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
        Schema::dropIfExists('students');
    }
}
