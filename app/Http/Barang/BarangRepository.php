<?php

namespace App\Http\Barang;

use App\Http\Repository\BaseRepository;

class BarangRepository extends BaseRepository
{
    public function __construct($model)
    {
        parent::__construct($model);
    }

    public function createbarang(BarangEntity $barang)
    {
        $barang = [
            'id' => $barang->getId(),
            'nama' => $barang->getNama(),
            'kategori' => $barang->getKategori(),
            'stok_keseluruhan' => $barang->getStok_keseluruhan(),
            'status' => $barang->getStatus(),
        ];
        parent::create($barang);
    }

    public function createDetailBarang(BarangDetailEntity $detailbarang)
    {
//        dd($detailbarang->getId_barang());
        $detailbarang = [
            'id_barang' => $detailbarang->getId_barang(),
            'merk' => $detailbarang->getMerk(),
            'tipe' => $detailbarang->getTipe(),
            'spesifikasi' => $detailbarang->getSpesifikasi(),
            'stok' => $detailbarang->getStok(),
            'status' => $detailbarang->getStatus(),
            'keterangan' => $detailbarang->getKeterangan(),
        ];
        parent::create($detailbarang);
    }
}
