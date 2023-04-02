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
        Schema::create('a_g_m_attenddes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('ic_no')->nullable();
            $table->foreignUuid('department_id')->nullable();
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
        Schema::dropIfExists('a_g_m_attenddes');
    }
};
