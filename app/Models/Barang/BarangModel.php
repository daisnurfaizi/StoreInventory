<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = [
        'id',
        'nama',
        'kategori',
        'stok_keseluruhan',
        'status',
    ];

    //    soft delete
    protected $dates = ['deleted_at'];
}
