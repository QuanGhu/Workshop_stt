<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_category');
            $table->string('product_name');
            $table->string('product_price');
            $table->unsignedInteger('qty');
            $table->unsignedInteger('order_master_id')->nullable();
            $table->timestamps();

            $table->foreign('order_master_id')->references('id')->on('order_master')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
