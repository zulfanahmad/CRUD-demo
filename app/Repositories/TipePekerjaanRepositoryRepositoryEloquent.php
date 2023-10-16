<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus.Repository\Criteria\RequestCriteria;
use App\Repositories\TipePekerjaanRepositoryRepository;
/**use App\Entities\TipePekerjaanRepository;*/
use App\Models\TipePekerjaan;
use App\Validators\TipePekerjaanRepositoryValidator;

/**
 * Class TipePekerjaanRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TipePekerjaanRepositoryRepositoryEloquent extends BaseRepository implements TipePekerjaanRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TipePekerjaan::class;
    }

    /**
     * Create a new Tipe Pekerjaan.
     *
     * @param array $data
     * @return TipePekerjaanRepository
     */
    public function create(array $data)
    {
        return TipePekerjaan::create($data);
    }

    /**
     * Update a Tipe Pekerjaan by ID.
     *
     * @param array $data
     * @param int $id
     * @return TipePekerjaanRepository
     */
    public function update(array $data, $id)
    {
        $tipePekerjaan = TipePekerjaan::find($id);
        $tipePekerjaan->update($data);
        return $tipePekerjaan;
    }

    /**
     * Delete a Tipe Pekerjaan by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return TipePekerjaan::destroy($id);
    }

    /**
     * Find a Tipe Pekerjaan by ID.
     *
     * @param int $id
     * @return TipePekerjaanRepository
     */
    public function find($id)
    {
        return TipePekerjaan::find($id);
    }

    /**
     * Get all Tipe Pekerjaans.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return TipePekerjaan::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

