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
        Schema::create('kakitangans', function (Blueprint $table) {
            $table->id();
            $table->string('pekerja_id');
            $table->string('namaPenuh');
            $table->string('icNo');
            $table->string('telNo');
            $table->string('email');
            $table->string('tarafPerkhidmatan');
            $table->string('jawatan');
            $table->string('cawangan');
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
        Schema::dropIfExists('kakitangans');
    }
};
