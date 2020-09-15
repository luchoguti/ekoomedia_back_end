<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->text('name_user');
            $table->string('email')->unique ();
            $table->string ('nickname')->unique ();
            $table->text('phone');
            $table->bigInteger ('age');
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
        Schema::dropIfExists ('user');
    }
}
