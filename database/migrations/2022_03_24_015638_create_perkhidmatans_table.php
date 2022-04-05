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
        Schema::create('perkhidmatans', function (Blueprint $table) {
            $table->id();
            $table->string('kontrak');
            $table->string('kwsp');
            $table->string('pencen');
            $table->string('tarikhMula');
            $table->string('tempoh');
            $table->string('kursus');
            $table->string('tempohKursus');
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
        Schema::dropIfExists('perkhidmatans');
    }
};
