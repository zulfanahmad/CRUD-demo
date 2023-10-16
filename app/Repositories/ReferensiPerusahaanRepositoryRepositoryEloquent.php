<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ReferensiPerusahaanRepositoryRepository;
/**use App\Entities\ReferensiPerusahaanRepository;*/
use App\Models\ReferensiPerusahaan;
use App\Validators\ReferensiPerusahaanRepositoryValidator;

/**
 * Class ReferensiPerusahaanRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ReferensiPerusahaanRepositoryRepositoryEloquent extends BaseRepository implements ReferensiPerusahaanRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReferensiPerusahaan::class;
    }

    /**
     * Create a new Referensi Perusahaan.
     *
     * @param array $data
     * @return ReferensiPerusahaanRepository
     */
    public function create(array $data)
    {
        return ReferensiPerusahaan::create($data);
    }

    /**
     * Update a Referensi Perusahaan by ID.
     *
     * @param array $data
     * @param int $id
     * @return ReferensiPerusahaanRepository
     */
    public function update(array $data, $id)
    {
        $referensi = ReferensiPerusahaan::find($id);
        $referensi->update($data);
        return $referensi;
    }

    /**
     * Delete a Referensi Perusahaan by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return ReferensiPerusahaan::destroy($id);
    }

    /**
     * Find a Referensi Perusahaan by ID.
     *
     * @param int $id
     * @return ReferensiPerusahaanRepository
     */
    public function find($id)
    {
        return ReferensiPerusahaan::find($id);
    }

    /**
     * Get all Referensi Perusahaan.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return ReferensiPerusahaan::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

