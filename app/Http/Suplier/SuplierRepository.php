<?php

namespace App\Http\Suplier;

use App\Http\Repository\BaseRepository;
use App\Models\Suplier\SuplierModel;

class SuplierRepository extends BaseRepository
{
    public function  __construct(SuplierModel $model)
    {
        parent::__construct($model);
    }

    public function  getSuplier()
    {
        return $this->model->all();
    }

    public function  getSuplierById($id)
    {
        return $this->model->find($id);
    }

    public function  getSuplierBy($field, $value, $columns = array('*'))
    {
        return $this->model->where($field, $value)->first($columns);
    }

    public function createSuplier(SuplierEntity $data)
    {
        $suplier = [
            'id' => $data->getId(),
            'nama_suplier' => $data->getNama_suplier(),
            'alamat' => $data->getAlamat(),
            'kode_pos' => $data->getKode_pos(),
            'telepon' => $data->getTelepon(),
            'fax' => $data->getFax(),
            'email' => $data->getEmail(),
            'kontak_person' => $data->getKontak_person(),
            'no_telp' => $data->getNo_telp(),
            'status' => $data->getStatus(),
        ];

        return $this->model->create($suplier);
    }

    public function updateSuplier(SuplierEntity $data)
    {
        $suplier = [
            'nama_suplier' => $data->getNama_suplier(),
            'alamat' => $data->getAlamat(),
            'kode_pos' => $data->getKode_pos(),
            'telepon' => $data->getTelepon(),
            'fax' => $data->getFax(),
            'email' => $data->getEmail(),
            'kontak_person' => $data->getKontak_person(),
            'no_telp' => $data->getNo_telp(),
            'status' => $data->getStatus(),
        ];

        return $this->model->where('id', $data->getId())->update($suplier);
    }

    public function deleteSuplier(SuplierEntity $suplier)
    {

        return $this->model::where('id', $suplier->getId())->delete();
    }
}
