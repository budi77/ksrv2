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
        Schema::create('fee_submissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->nullable();
            $table->foreignUuid('department_id')->nullable();
            $table->string('type')->nullable();
            $table->string('year')->nullable();
            $table->integer('total')->nullable();
            $table->longtext('remarks')->nullable();
            $table->foreignUuid('approver_id')->nullable();
            $table->datetime('approved_at', $precision = 0)->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('fee_submissions');
    }
};
