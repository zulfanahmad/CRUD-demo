<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PekerjaanRepositoryRepository;
use App\Models\Pekerjaan;
/**use App\Entities\PekerjaanRepository;*/
use App\Validators\PekerjaanRepositoryValidator;

/**
 * Class PekerjaanRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PekerjaanRepositoryRepositoryEloquent extends BaseRepository implements PekerjaanRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pekerjaan::class;
    }

    /**
     * Create a new Pekerjaan.
     *
     * @param array $data
     * @return PekerjaanRepository
     */
    public function create(array $data)
    {
        return Pekerjaan::create($data);
    }

    /**
     * Update a Pekerjaan by ID.
     *
     * @param array $data
     * @param int $id
     * @return PekerjaanRepository
     */
    public function update(array $data, $id)
    {
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->update($data);
        return $pekerjaan;
    }

    /**
     * Delete a Pekerjaan by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return Pekerjaan::destroy($id);
    }

    /**
     * Find a Pekerjaan by ID.
     *
     * @param int $id
     * @return PekerjaanRepository
     */
    public function find($id)
    {
        return Pekerjaan::find($id);
    }

    /**
     * Get all Pekerjaans.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Pekerjaan::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

