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
        Schema::create('temudugas', function (Blueprint $table) {
            $table->id();
            $table->string('pemohon_id')->nullable();
            $table->string('panel_id')->nullable();
            $table->string('tarikhTemuduga');
            $table->string('lokasi');
            $table->string('markahPenilaian');
            $table->string('status');
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
        Schema::dropIfExists('temudugas');
    }
};
