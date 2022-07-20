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
            $table->string('purpose');
            $table->string('data');
            $table->unsignedBigInteger('id_social_population');
            $table->foreign('id_social_population')->references('id')->on('social_population');
            $table->unsignedBigInteger('id_economy_trade');
            $table->foreign('id_economy_trade')->references('id')->on('economy_trade');
            $table->unsignedBigInteger('id_agriculture_mining');
            $table->foreign('id_agriculture_mining')->references('id')->on('agriculture_mining');
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
