<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PermintaanJasaRepositoryRepository;
/**use App\Entities\PermintaanJasaRepository;*/
use App\Models\PermintaanJasa;
use App\Validators\PermintaanJasaRepositoryValidator;

/**
 * Class PermintaanJasaRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PermintaanJasaRepositoryRepositoryEloquent extends BaseRepository implements PermintaanJasaRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PermintaanJasa::class;
    }

    /**
     * Create a new Permintaan Jasa.
     *
     * @param array $data
     * @return PermintaanJasaRepository
     */
    public function create(array $data)
    {
        return PermintaanJasa::create($data);
    }

    /**
     * Update a Permintaan Jasa by ID.
     *
     * @param array $data
     * @param int $id
     * @return PermintaanJasaRepository
     */
    public function update(array $data, $id)
    {
        $permintaanJasa = PermintaanJasa::find($id);
        $permintaanJasa->update($data);
        return $permintaanJasa;
    }

    /**
     * Delete a Permintaan Jasa by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return PermintaanJasa::destroy($id);
    }

    /**
     * Find a Permintaan Jasa by ID.
     *
     * @param int $id
     * @return PermintaanJasaRepository
     */
    public function find($id)
    {
        return PermintaanJasa::find($id);
    }

    /**
     * Get all Permintaan Jasas.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return PermintaanJasa::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

