<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_name')->index()->nullable();
            $table->text('note')->nullable();
            $table->text('image_logo')->nullable();
            $table->longText('option')->nullable();
            $table->integer('status')->nullable()->default(1);
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
        Schema::dropIfExists('item_brands');
    }
}
