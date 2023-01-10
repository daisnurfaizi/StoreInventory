<?php

namespace App\Http\Interface;

use App\Http\Barang\BarangEntity;

interface RepositoryInterface
{
    public  function  getAll();
    public  function  create($barang);
    public  function  update(array $data, $id);
    public  function  delete($id);
    public  function  show($id);

    public  function  showBy($field, $value, $columns = array('*'));

    public function  softDelete($id);
}
