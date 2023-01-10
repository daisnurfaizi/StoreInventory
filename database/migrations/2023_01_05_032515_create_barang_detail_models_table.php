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
        Schema::create('barang_detail', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang', 10);
            $table->string('merk', 50)->nullable();
            $table->string('tipe', 50)->nullable();
            $table->string('spesifikasi', 50)->nullable();
            $table->integer('stok')->default(0)->nullable();
            $table->string('status', 1)->default('1');
            $table->text('keterangan', 50)->nullable();
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_detail');
    }
};
