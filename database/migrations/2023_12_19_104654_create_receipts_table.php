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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('receipt_no')->nullable();
            $table->date('receipt_date')->nullable();
            $table->string('receive_from')->nullable();
            $table->string('receive_by')->nullable();
            $table->string('ringgit')->nullable();
            $table->string('payment_for')->nullable();
            $table->foreignUuid('department_id');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('receipts');
    }
};
