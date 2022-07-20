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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('hp');
            $table->string('name');
            $table->char('gender');
            $table->string('email');
            $table->string('age');
            $table->string('nipnim');
            $table->string('institute');
            $table->string('address');
            $table->unsignedBigInteger('id_job');
            $table->foreign('id_job')->references('id')->on('job');
            $table->unsignedBigInteger('id_education');
            $table->foreign('id_education')->references('id')->on('education');
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
        Schema::dropIfExists('customer');
    }
};
