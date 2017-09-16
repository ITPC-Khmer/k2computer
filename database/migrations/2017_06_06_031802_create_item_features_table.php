<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->default(0)->nullable();
            $table->string('title')->index()->nullable();
            $table->string('description')->nullable();
            $table->longText('option')->nullable();
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
        Schema::dropIfExists('item_features');
    }
}
