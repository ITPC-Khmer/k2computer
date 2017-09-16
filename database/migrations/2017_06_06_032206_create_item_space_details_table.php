<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSpaceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_space_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->index()->default(0)->nullable();
            $table->integer('spec_id')->index()->default(0)->nullable();
            $table->text('spec_value')->nullable();
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
        Schema::dropIfExists('item_space_details');
    }
}
