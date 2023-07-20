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
        Schema::create('patriotiks', function (Blueprint $table) {
            $table->id();
            $table->string('penyertaan');
            $table->string('nama');
            $table->string('department_id');
            $table->string('alamat');
            $table->string('telefon')->nullable();
            $table->string('emel')->nullable();
            $table->string('tajuk_lagu')->nullable();
            $table->string('penyanyi')->nullable();
            $table->string('pautan')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
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
        Schema::dropIfExists('patriotiks');
    }
};
