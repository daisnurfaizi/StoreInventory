<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangDetailModel extends Model
{
    use HasFactory;

    protected $table = 'barang_detail';
    protected $fillable = [
        'id_barang',
        'merk',
        'tipe',
        'spesifikasi',
        'stok',
        'status',
        'keterangan',
    ];

    //    soft delete
    protected $dates = ['deleted_at'];
}
