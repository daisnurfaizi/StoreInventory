<?php
namespace App\Http\Barang;
use App\Http\Barang\BarangBuilder;
use App\Http\Barang\BarangDetailBuilder;
use App\Http\Barang\BarangRepository;
use App\Models\Barang\BarangDetailModel;
use App\Models\Barang\BarangModel;
use Illuminate\Support\Facades\DB;

class BarangService
{
    protected $barang;
    protected $detailbarang;

    public function __construct()
    {
        $this->barang = new BarangRepository(new BarangModel());
        $this->detailbarang = new BarangRepository(new BarangDetailModel());
    }
    public function createBarang($request)
    {

        return DB::transaction(function () use ($request) {
            $barang = (new BarangBuilder)
                ->setId($request->id)
                ->setNama($request->nama)
                ->setKategori($request->kategori)
                ->setStok_keseluruhan($request->stok_keseluruhan ?? 0)
                ->setStatus($request->status ?? 1)
                ->build();
            $this->barang->createbarang($barang);
            if (!empty($request->merk)) {
                foreach ($request->merk as $key => $value) {
                    $detailbarang = (new BarangDetailBuilder)
                        ->setId_barang($request->id)
                        ->setMerk($request->merk[$key])
                        ->setTipe($request->tipe[$key])
                        ->setSpesifikasi($request->spesifikasi[$key])
                        ->setStok($request->stok[$key])
                        ->setStatus($request->status ?? 1)
                        ->setKeterangan($request->keterangan[$key])
                        ->build();
                    $this->detailbarang->createDetailBarang($detailbarang);
                }
            }
            DB::commit();
        });
    }

    public function getRepositoryBarang()
    {
        return $this->barang;
    }

    public function getRepositoryDetailBarang()
    {
        return $this->detailbarang;
    }
}
