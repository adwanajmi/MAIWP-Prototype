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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('pemohon_id')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('icNo');
            $table->string('jantina');
            $table->string('negeriAsal');
            $table->string('warganegara');
            $table->string('status');
            $table->string('akademik');
            $table->string('pengalamanKerja');
            $table->string('jawatan_id')->nullable();
            
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
        Schema::dropIfExists('permohonans');
    }
};
