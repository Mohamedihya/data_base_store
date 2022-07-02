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
        Schema::create('orders_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_orderd')->unsigned()->foreign('id_orderd')->references('id')->on('orders');
            $table->integer('id_color_size')->unsigned()->foreign('id_color_size')->references('id')->on('product_size_color');
            $table->integer('quantity');
            $table->decimal('price',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();//copoune  //ta5fid)
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
        Schema::dropIfExists('orders_details');
    }
};
