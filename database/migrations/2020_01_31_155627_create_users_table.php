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
            $table->bigIncrements('id');
            $table->rememberToken();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->string('email');
            $table->string('adresse_livraison');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->boolean('statut')->default(0);
            $table->boolean('validate')->default(1);
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
