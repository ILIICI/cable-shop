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
        Schema::create('model_smartphones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('smartphone_id')->unsigned();
            $table->string('model_name');
            $table->string('slug')->nullable();
            $table->double('price');
            $table->text('description');
            $table->timestamps();

            $table->foreign('smartphone_id')
                ->references('id')
                ->on('smartphones')
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