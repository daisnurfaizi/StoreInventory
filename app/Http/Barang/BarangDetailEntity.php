<?php

namespace App\Http\Barang;

class BarangDetailEntity
{
    private $id;
    private $id_barang;
    private $merk;
    private $tipe;
    private $spesifikasi;
    private $stok;
    private $status;
    private $keterangan;

    public function __construct($id, $id_barang, $merk, $tipe, $spesifikasi, $stok, $status, $keterangan)
    {
        $this->id = $id;
        $this->id_barang = $id_barang;
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->spesifikasi = $spesifikasi;
        $this->stok = $stok;
        $this->status = $status;
        $this->keterangan = $keterangan;
    }


    /**
     * Get the value of keterangan
     */
    public function getKeterangan()
    {
        return $this->keterangan;
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
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
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

    /**
     * Get the value of stok
     */
    public function getStok()
    {
        return $this->stok;
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
     * Get the value of spesifikasi
     */
    public function getSpesifikasi()
    {
        return $this->spesifikasi;
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
     * Get the value of tipe
     */
    public function getTipe()
    {
        return $this->tipe;
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
     * Get the value of merk
     */
    public function getMerk()
    {
        return $this->merk;
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
     * Get the value of id_barang
     */
    public function getId_barang()
    {
        return $this->id_barang;
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
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

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
}
