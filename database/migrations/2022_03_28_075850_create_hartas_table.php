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
        Schema::create('hartas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('jenisPendapatan');
            $table->string('totalPendapatan');
            $table->string('pendapatanTambahan');
            $table->string('kategori');
            $table->string('tanggungan');
            $table->string('tarikhDeclare');
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
        Schema::dropIfExists('hartas');
    }
};
