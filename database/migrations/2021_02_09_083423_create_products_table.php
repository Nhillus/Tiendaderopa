<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_category')->unsigned();
            $table->integer('id_subcategory')->unsigned();
            $table->string('title', 100);
            $table->text('description');
            $table->double('real_price')->unsiged();
            $table->double('offer_price')->unsiged();
            $table->integer('offer_percent')->unsigned();
            $table->string('shipping_days', 100);
            $table->double('shipping_price')->unsiged();
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_subcategory')->references('id')->on('subcategories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
