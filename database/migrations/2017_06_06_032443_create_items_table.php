<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->default(0)->nullable();
            $table->integer('brand_id')->index()->default(0)->nullable();
            $table->string('code')->nullable();
            $table->text('url_detail')->index()->nullable();
            $table->string('title')->index()->nullable();
            $table->text('description')->nullable();
            $table->longText('option')->nullable();
            $table->double('start_price')->default(0)->nullable();
            $table->double('promotion_price')->default(0)->nullable();
            $table->date('promotion_expire_date')->nullable();
            $table->text('image_url')->nullable();
            $table->integer('status')->default(1)->nullable();
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
        Schema::dropIfExists('items');
    }
}
