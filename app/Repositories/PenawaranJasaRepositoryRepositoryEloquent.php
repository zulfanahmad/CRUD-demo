<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PenawaranJasaRepositoryRepository;
use App\Models\PenawaranJasa;
use App\Validators\PenawaranJasaRepositoryValidator;

/**
 * Class PenawaranJasaRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PenawaranJasaRepositoryRepositoryEloquent extends BaseRepository implements PenawaranJasaRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PenawaranJasa::class;
    }

    /**
     * Create a new Penawaran Jasa.
     *
     * @param array $data
     * @return PenawaranJasaRepository
     */
    public function create(array $data)
    {
        return PenawaranJasa::create($data);
    }

    /**
     * Update a Penawaran Jasa by ID.
     *
     * @param array $data
     * @param int $id
     * @return PenawaranJasaRepository
     */
    public function update(array $data, $id)
    {
        $penawaranJasa = PenawaranJasa::find($id);
        $penawaranJasa->update($data);
        return $penawaranJasa;
    }

    /**
     * Delete a Penawaran Jasa by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return PenawaranJasa::destroy($id);
    }

    /**
     * Find a Penawaran Jasa by ID.
     *
     * @param int $id
     * @return PenawaranJasaRepository
     */
    public function find($id)
    {
        return PenawaranJasa::find($id);
    }

    /**
     * Get all Penawaran Jasas.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return PenawaranJasa::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}


