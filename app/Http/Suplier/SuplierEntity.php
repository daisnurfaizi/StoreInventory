<?php

namespace App\Http\Suplier;

class SuplierEntity
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


    public function __construct(
        $id,
        $nama_suplier,
        $alamat,
        $kode_pos,
        $telepon,
        $fax,
        $email,
        $kontak_person,
        $no_telp,
        $status,
        $created_at,
        $updated_at
    ) {
        $this->id = $id;
        $this->nama_suplier = $nama_suplier;
        $this->alamat = $alamat;
        $this->kode_pos = $kode_pos;
        $this->telepon = $telepon;
        $this->fax = $fax;
        $this->email = $email;
        $this->kontak_person = $kontak_person;
        $this->no_telp = $no_telp;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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

    /**
     * Get the value of nama_suplier
     */
    public function getNama_suplier()
    {
        return $this->nama_suplier;
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
     * Get the value of alamat
     */
    public function getAlamat()
    {
        return $this->alamat;
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
     * Get the value of kode_pos
     */
    public function getKode_pos()
    {
        return $this->kode_pos;
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
     * Get the value of telepon
     */
    public function getTelepon()
    {
        return $this->telepon;
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
     * Get the value of fax
     */
    public function getFax()
    {
        return $this->fax;
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
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
     * Get the value of kontak_person
     */
    public function getKontak_person()
    {
        return $this->kontak_person;
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
     * Get the value of no_telp
     */
    public function getNo_telp()
    {
        return $this->no_telp;
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
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
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
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
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
}
