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
        Schema::create('poultries', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->unsignedBigInteger('poultry_type_id');
            $table->foreign('poultry_type_id')->references('id')->on('poultry_types');
            $table->unsignedBigInteger('poultry_status_id');
            $table->foreign('poultry_status_id')->references('id')->on('poultry_statuses');

            $table->dateTime('dateCreated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poultries');
    }
};
