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
        Schema::create('pancings', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('no_kp')->nullable();
            $table->string('jantina')->nullable();
            $table->foreignUuid('department_id');
            $table->string('ahli')->nullable();
            $table->date('tarikh_bayaran')->nullable();
            $table->integer('jumlah_bayaran')->nullable();
            $table->string('lampiran_bayaran')->nullable();
            $table->string('ext1')->nullable();
            $table->string('ext2')->nullable();
            $table->string('ext3')->nullable();
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
        Schema::dropIfExists('pancings');
    }
};
