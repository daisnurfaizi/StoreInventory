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
        Schema::create('suplier', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('nama_suplier', 50);
            $table->string('alamat', 50);
            $table->string('kode_pos', 5)->nullable();
            $table->string('telepon', 15);
            $table->string('fax', 15)->nullable();
            $table->string('email', 50);
            $table->string('kontak_person', 50);
            $table->string('no_telp', 15);
            $table->string('status', 1)->default('1'); // '1' => 'Aktif', '0' => 'Tidak Aktif
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
        Schema::dropIfExists('suplier');
    }
};
