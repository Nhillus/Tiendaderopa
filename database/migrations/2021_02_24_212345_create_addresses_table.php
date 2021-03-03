<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('location', 100)->nullable();
            $table->string('shipping_address', 100);
            $table->string('city', 100);
            $table->string('postal_code', 10);
            $table->string('country', 30);
            $table->string('greeting', 10);
            $table->string('last_name', 30);
            $table->string('first_name', 30);
            $table->string('business', 50);
            $table->string('phone', 25);
            $table->text('additional_address');
            $table->enum('standard', ['0', '1'])->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
