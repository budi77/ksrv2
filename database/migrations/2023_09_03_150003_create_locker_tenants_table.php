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
        Schema::create('locker_tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locker_id');
            $table->string('name')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->integer('period')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('fees')->nullable();
            $table->string('extra1')->nulllable();
            $table->string('extra2')->nulllable();
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
        Schema::dropIfExists('locker_tenants');
    }
};
