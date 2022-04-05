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
        Schema::create('kenderaans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('activity');
            $table->string('jenisHaluan');
            $table->string('destinasi');
            $table->string('tarikh');
            $table->string('bilPenumpang');
            $table->string('desc');
            $table->boolean('lulus')->nullable();
            $table->string('ditolak')->nullable();
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
        Schema::dropIfExists('kenderaans');
    }
};
