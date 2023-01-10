<?php

namespace App\Http\Barang;

use App\http\Barang\BarangEntity;

class BarangDetailBuilder
{
    private $id;
    private $id_barang;
    private $merk;
    private $tipe;
    private $spesifikasi;
    private $stok;
    private $keterangan;
    private $status;


    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of id_barang
     *
     * @return  self
     */
    public function setId_barang($id_barang)
    {
        $this->id_barang = $id_barang;

        return $this;
    }

    /**
     * Set the value of merk
     *
     * @return  self
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;

        return $this;
    }

    /**
     * Set the value of tipe
     *
     * @return  self
     */
    public function setTipe($tipe)
    {
        $this->tipe = $tipe;

        return $this;
    }

    /**
     * Set the value of spesifikasi
     *
     * @return  self
     */
    public function setSpesifikasi($spesifikasi)
    {
        $this->spesifikasi = $spesifikasi;

        return $this;
    }

    /**
     * Set the value of stok
     *
     * @return  self
     */
    public function setStok($stok)
    {
        $this->stok = $stok;

        return $this;
    }

    /**
     * Set the value of keterangan
     *
     * @return  self
     */
    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function build(): BarangDetailEntity
    {
        return new BarangDetailEntity(
            $this->id,
            $this->id_barang,
            $this->merk,
            $this->tipe,
            $this->spesifikasi,
            $this->stok,
            $this->status,
            $this->keterangan
        );
    }
}
