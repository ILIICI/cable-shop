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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_uuid')->unique();
            $table->bigInteger('sugcategory_id')->unsigned();
            $table->string('product_name');
            $table->string('slug')->nullable();
            $table->bigInteger('instock');
            $table->string('sncode');
            $table->json('images');
            $table->double('price');
            $table->text('short_description');
            $table->text('tech_description');
            $table->text('long_description');
            $table->timestamps();

            $table->foreign('sugcategory_id')
                ->references('id')
                ->on('subcategory')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_smartphones');
    }
};