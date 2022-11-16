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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('media');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('service');
            $table->unsignedBigInteger('id_purpose');
            $table->foreign('id_purpose')->references('id')->on('purpose');
            $table->string('data');
            $table->unsignedBigInteger('id_sub_categories');
            $table->foreign('id_sub_categories')->references('id')->on('sub_categories');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('transactions');
    }
};
