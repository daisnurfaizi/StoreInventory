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
        Schema::create('sub_kelompok', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_kelompok');
            $table->string('id_barang', 10)->nullable();
            $table->string('nama_kelompok', 50);
            $table->timestamps();
            $table->foreign('id_kelompok')->references('id')->on('kelompok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_kelompok');
    }
};
