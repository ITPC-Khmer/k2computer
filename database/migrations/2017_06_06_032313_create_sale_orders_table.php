<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index()->default(0)->nullable();
            $table->date('order_date')->nullable();
            $table->date('require_date')->nullable();
            $table->double('total_qty')->default(0)->nullable();
            $table->double('total_amount')->default(0)->nullable();
            $table->double('total_discount')->default(0)->nullable();
            $table->double('total_tax')->default(0)->nullable();

            $table->text('delivery_address')->nullable();
            $table->date('delivery_date')->nullable();

            $table->integer('order_status')->index()->default(1)->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('sale_orders');
    }
}
