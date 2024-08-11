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
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->integer('contigent1_id')->references('id')->on('contigents')->nullable();
            $table->integer('contigent2_id')->references('id')->on('contigents')->nullable();
            $table->integer('result1')->nullable();
            $table->integer('result2')->nullable();
            $table->integer('order')->nullable();
            $table->string('group')->nullable();
            $table->string('stage')->nullable();
            $table->foreignId('sport_id')->nullable();
            $table->string('court')->nullable();
            $table->string('ext1')->nullable();
            $table->string('ext2')->nullable();
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
        Schema::dropIfExists('fixtures');
    }
};
