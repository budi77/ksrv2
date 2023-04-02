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
        Schema::create('federation_fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('federation_id')->nullable();
            $table->string('year')->nullable();
            $table->integer('value')->nullable();
            $table->string('mode')->nullable();
            $table->date('payment_date')->nullable();
            $table->foreignUuid('user_id')->nullable();
            $table->string('extra')->nullable();
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
        Schema::dropIfExists('federation_fees');
    }
};
