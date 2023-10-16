<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria.RequestCriteria;
use App\Repositories\ProyekRepositoryRepository;
use App\Models\Proyek;
use App\Validators\ProyekRepositoryValidator;

class ProyekRepositoryRepositoryEloquent extends BaseRepository implements ProyekRepositoryRepository
{
    public function model()
    {
        return Proyek::class;
    }

    public function create(array $data)
    {
        return Proyek::create($data);
    }

    public function update(array $data, $id)
    {
        $proyek = Proyek::find($id);
        $proyek->update($data);
        return $proyek;
    }

    public function delete($id)
    {
        return Proyek::destroy($id);
    }

    public function find($id)
    {
        return Proyek::find($id);
    }

    public function all()
    {
        return Proyek::all();
    }
}


