<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string("saludo")->default("");
            $table->string("primer_nombre")->nullable();
            $table->string("primer_apellido")->nullable();
            $table->string("correo_eletronico")->nullable();
            $table->string("idioma")->nullable();
            $table->string("pueblo_favorito")->defualt("zurich");
            $table->timestamps();
        });
        Schema::table('user_details', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
