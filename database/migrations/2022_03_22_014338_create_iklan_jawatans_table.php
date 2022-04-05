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
        Schema::create('iklan_jawatans', function (Blueprint $table) {
            $table->id();
            $table->string('tarikhMula');
            $table->string('tarikhTutup');
            $table->string('jawatan');
            $table->string('penempatan');
            $table->string('kekosongan');
            $table->string('tarafJawatan');
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
        Schema::dropIfExists('iklan_jawatans');
    }
};
