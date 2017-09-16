<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sale_order_id')->index()->default(0)->nullable();
            $table->integer('item_id')->index()->default(0)->nullable();
            $table->double('qty')->default(0)->nullable();
            $table->double('price')->default(0)->nullable();
            $table->double('discount')->default(0)->nullable();
            $table->double('amount')->default(0)->nullable();
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
        Schema::dropIfExists('sale_order_details');
    }
}
