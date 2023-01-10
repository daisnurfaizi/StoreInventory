<?php

namespace App\Http\Barang;

use App\http\Barang\BarangEntity;

class BarangBuilder
{
    private $id;
    private $nama;
    private $kategori;
    private $stok_keseluruhan;
    private $status;

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
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function build(): BarangEntity
    {
        return new BarangEntity($this->id,
            $this->nama, $this->kategori, $this->stok_keseluruhan, $this->status);
    }
}
