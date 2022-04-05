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
        Schema::create('biliks', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('namaMesyuarat');
            $table->string('pengerusi');
            $table->string('maklumat');
            $table->string('jenisBilik');
            $table->string('tarikh');
            $table->string('bilAhli');
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
        Schema::dropIfExists('biliks');
    }
};
