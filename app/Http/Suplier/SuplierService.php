<?php

namespace App\Http\Suplier;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Suplier;

class SuplierService
{
    protected $suplierRepository;
    public  function __construct(SuplierRepository $suplierrepository)
    {
        $this->suplierRepository = $suplierrepository;
    }


    public  function  createSuplier($data)
    {
        //        dd($data);
        //            if($this->validateSuplier($data)->fails()){
        //                return $this->validateSuplier($data)->errors();
        //            }
        //            else{
        try {
            $suplier = (new SuplierBuilder)
                ->setId($data->id)
                ->setNama_suplier($data->nama_suplier)
                ->setAlamat($data->alamat)
                ->setKode_pos($data->kode_pos)
                ->setTelepon($data->telepon)
                ->setFax($data->fax)
                ->setEmail($data->email)
                ->setKontak_person($data->kontak_person)
                ->setNo_telp($data->no_telp)
                ->setStatus($data->status)
                ->build();
            return DB::transaction(function () use ($suplier) {
                $this->suplierRepository->createSuplier($suplier);
                DB::commit();
            });
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Suplier gagal ditambahkan' . $th->getMessage()
            ], 500);
        }
        //            }
    }

    public  function  validateSuplier($data)
    {
        $rules = [
            'nama_suplier' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'telepon' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'kontak_person' => 'required',
            'no_telp' => 'required',
        ];

        $message = [
            'nama_suplier.required' => 'Nama Suplier tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'kode_pos.required' => 'Kode Pos tidak boleh kosong',
            'telepon.required' => 'Telepon tidak boleh kosong',
            'fax.required' => 'Fax tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'kontak_person.required' => 'Kontak Person tidak boleh kosong',
            'no_telp.required' => 'No Telp tidak boleh kosong',
        ];
        return Validator::make($data, $rules, $message);
    }

    public function updateSuplier($suplier)
    {
        try {
            $suplier = (new SuplierBuilder)
                ->setId($suplier->id)
                ->setNama_suplier($suplier->nama_suplier)
                ->setAlamat($suplier->alamat)
                ->setKode_pos($suplier->kode_pos)
                ->setTelepon($suplier->telepon)
                ->setFax($suplier->fax)
                ->setEmail($suplier->email)
                ->setKontak_person($suplier->kontak_person)
                ->setNo_telp($suplier->no_telp)
                ->setStatus($suplier->status)
                ->build();
            return DB::transaction(function () use ($suplier) {
                $this->suplierRepository->updateSuplier($suplier);
                DB::commit();
            });
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Suplier gagal diupdate' . $th->getMessage()
            ], 500);
        }
    }
    public function deleteSuplier($suplier)
    {
//      dd($suplier);
        $suplier = (new SuplierBuilder)
            ->setId($suplier->id)
            ->build();
//        dd($suplier);
            try {
                return DB::transaction(function () use ($suplier) {
                   $result =  $this->suplierRepository->deleteSuplier($suplier); // ini returnya sudah true
                    DB::commit();
                    return $result;
                });
//                DB::commit();

            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Suplier gagal dihapus' . $th->getMessage()
                ], 500);
            }

    }
    public function getSuplierService()
    {
        return $this->suplierRepository;
    }
}
