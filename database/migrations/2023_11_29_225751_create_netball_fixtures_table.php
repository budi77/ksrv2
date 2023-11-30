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
        Schema::create('netball_fixtures', function (Blueprint $table) {
            $table->id();
            $table->integer('team1_id')->references('id')->on('teams')->nullable();
            $table->integer('team2_id')->references('id')->on('teams')->nullable();
            $table->integer('result1')->nullable();
            $table->integer('result2')->nullable();
            $table->integer('match')->nullable();
            $table->string('group')->nullable();
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
        Schema::dropIfExists('netball_fixtures');
    }
};
