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
        Schema::create('angsis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kp')->nullable();
            $table->string('tel')->nullable();
            $table->string('emel')->nullable();
            $table->foreignUuid('department_id');
            $table->string('kecemasan')->nullable();
            $table->string('waris')->nullable();
            $table->string('pengangkutan')->nullable();
            $table->enum('penyakit', ['Ya', 'Tidak']);
            $table->string('sakit')->nullable();
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
        Schema::dropIfExists('angsis');
    }
};
