<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size_color', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_color')->unsigned();
            $table->integer('id_size')->unsigned();
            $table->foreign('id_color')->references('id')->on('product_colors');
            $table->foreign('id_size')->references('id')->on('product_size');
            $table->integer('quantity');
            $table->decimal('price_tow',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
            $table->integer('status')->default(1); // produit est existe sur le stocke ou non, 1 existe 0 n'existe pas
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
        Schema::dropIfExists('product_size_color');
    }
};
