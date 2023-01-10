<?php

namespace Database\Seeders;

use App\Models\Suplier\SuplierModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuplierModel::create([
            'id' => rand(1, 3),
            'nama_suplier' => 'PT. Sinar Jaya',
            'alamat' => 'Jl. Raya Cikarang',
            'kode_pos' => '17530',
            'telepon' => '021-123456',
            'fax' => '021-123456',
            'email' => 'd@gmail.com',
            'kontak_person' => 'D',
            'no_telp' => '081234567890',
            'status' => '1',
        ]);
    }
}
