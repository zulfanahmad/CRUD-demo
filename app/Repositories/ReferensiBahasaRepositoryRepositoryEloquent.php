<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ReferensiBahasaRepositoryRepository;
/**use App\Entities\ReferensiBahasaRepository;*/
use App\Models\ReferensiBahasa;
use App\Validators\ReferensiBahasaRepositoryValidator;

/**
 * Class ReferensiBahasaRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ReferensiBahasaRepositoryRepositoryEloquent extends BaseRepository implements ReferensiBahasaRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReferensiBahasa::class;
    }

    /**
     * Create a new Referensi Bahasa.
     *
     * @param array $data
     * @return ReferensiBahasaRepository
     */
    public function create(array $data)
    {
        return ReferensiBahasa::create($data);
    }

    /**
     * Update a Referensi Bahasa by ID.
     *
     * @param array $data
     * @param int $id
     * @return ReferensiBahasaRepository
     */
    public function update(array $data, $id)
    {
        $bahasa = ReferensiBahasa::find($id);
        $bahasa->update($data);
        return $bahasa;
    }

    /**
     * Delete a Referensi Bahasa by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return ReferensiBahasa::destroy($id);
    }

    /**
     * Find a Referensi Bahasa by ID.
     *
     * @param int $id
     * @return ReferensiBahasaRepository
     */
    public function find($id)
    {
        return ReferensiBahasa::find($id);
    }

    /**
     * Get all Referensi Bahasa.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return ReferensiBahasa::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}



