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
        Schema::create('ksr_arenas', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('department_id');
            $table->string('nama_pengurus');
            $table->string('no_tel')->nullable();
            $table->integer('volleyball')->nullable()->default(0);
            $table->integer('netball')->nullable()->default(0);
            $table->string('borang_penyertaan')->nullable();
            $table->string('jumlah_bayaran')->nullable();
            $table->string('resit_bayaran')->nullable();
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
        Schema::dropIfExists('ksr_arenas');
    }
};
