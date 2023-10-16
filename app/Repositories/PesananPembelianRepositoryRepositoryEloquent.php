<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PesananPembelianRepositoryRepository;
use App\Models\PesananPembelian;
use App\Validators\PesananPembelianRepositoryValidator;

class PesananPembelianRepositoryRepositoryEloquent extends BaseRepository implements PesananPembelianRepositoryRepository
{
    public function model()
    {
        return PesananPembelian::class;
    }

    public function create(array $data)
    {
        return PesananPembelian::create($data);
    }

    public function update(array $data, $id)
    {
        $pesanan = PesananPembelian::find($id);
        $pesanan->update($data);
        return $pesanan;
    }

    public function delete($id)
    {
        return PesananPembelian::destroy($id);
    }

    public function find($id)
    {
        return PesananPembelian::find($id);
    }

    public function all()
    {
        return PesananPembelian::all();
    }
    
    // Add more custom methods as needed.
}

