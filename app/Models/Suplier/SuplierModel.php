<?php

namespace App\Models\Suplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierModel extends Model
{
    use HasFactory;

    protected $table = 'suplier';

    protected $fillable = [
        'id',
        'nama_suplier',
        'alamat',
        'kode_pos',
        'telepon',
        'fax',
        'email',
        'kontak_person',
        'no_telp',
        'status',
        'created_at',
        'updated_at'
    ];

//    soft delete
    protected $dates = ['deleted_at'];
}
