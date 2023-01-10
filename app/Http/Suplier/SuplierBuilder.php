<?php

namespace App\Http\Suplier;

class SuplierBuilder
{

    private $id;
    private $nama_suplier;
    private $alamat;
    private $kode_pos;
    private $telepon;
    private $fax;
    private $email;
    private $kontak_person;
    private $no_telp;
    private $status;
    private $created_at;
    private $updated_at;

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
     * Set the value of nama_suplier
     *
     * @return  self
     */
    public function setNama_suplier($nama_suplier)
    {
        $this->nama_suplier = $nama_suplier;

        return $this;
    }

    /**
     * Set the value of alamat
     *
     * @return  self
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Set the value of kode_pos
     *
     * @return  self
     */
    public function setKode_pos($kode_pos)
    {
        $this->kode_pos = $kode_pos;

        return $this;
    }

    /**
     * Set the value of telepon
     *
     * @return  self
     */
    public function setTelepon($telepon)
    {
        $this->telepon = $telepon;

        return $this;
    }

    /**
     * Set the value of fax
     *
     * @return  self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of kontak_person
     *
     * @return  self
     */
    public function setKontak_person($kontak_person)
    {
        $this->kontak_person = $kontak_person;

        return $this;
    }

    /**
     * Set the value of no_telp
     *
     * @return  self
     */
    public function setNo_telp($no_telp)
    {
        $this->no_telp = $no_telp;

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

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }


    public function build(): SuplierEntity
    {
        return new SuplierEntity(
            $this->id,
            $this->nama_suplier,
            $this->alamat,
            $this->kode_pos,
            $this->telepon,
            $this->fax,
            $this->email,
            $this->kontak_person,
            $this->no_telp,
            $this->status,
            $this->created_at,
            $this->updated_at
        );
    }
}
