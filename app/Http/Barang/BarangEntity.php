<?php

namespace App\Http\Barang;

class BarangEntity
{
    private $id;
    private $nama;
    private $kategori;
    private $stok_keseluruhan;
    private $status;

    public function __construct($id, $nama, $kategori, $stok_keseluruhan, $status)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->stok_keseluruhan = $stok_keseluruhan;
        $this->status = $status;
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
     * Get the value of stok_keseluruhan
     */
    public function getStok_keseluruhan()
    {
        return $this->stok_keseluruhan;
    }

    /**
     * Set the value of stok_keseluruhan
     *
     * @return  self
     */
    public function setStok_keseluruhan($stok_keseluruhan)
    {
        $this->stok_keseluruhan = $stok_keseluruhan;

        return $this;
    }

    /**
     * Get the value of kategori
     */
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * Set the value of kategori
     *
     * @return  self
     */
    public function setKategori($kategori)
    {
        $this->kategori = $kategori;

        return $this;
    }

    /**
     * Get the value of nama
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set the value of nama
     *
     * @return  self
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

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
