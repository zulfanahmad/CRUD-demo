<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TagihanRepositoryRepository;
/**use App\Entities\TagihanRepository;*/
use App\Entities\Tagihan;
use App\Validators\TagihanRepositoryValidator;

/**
 * Class TagihanRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TagihanRepositoryRepositoryEloquent extends BaseRepository implements TagihanRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tagihan::class;
    }

    /**
     * Create a new Tagihan.
     *
     * @param array $data
     * @return TagihanRepository
     */
    public function create(array $data)
    {
        return Tagihan::create($data);
    }

    /**
     * Update a Tagihan by ID.
     *
     * @param array $data
     * @param int $id
     * @return TagihanRepository
     */
    public function update(array $data, $id)
    {
        $tagihan = Tagihan::find($id);
        $tagihan->update($data);
        return $tagihan;
    }

    /**
     * Delete a Tagihan by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return Tagihan::destroy($id);
    }

    /**
     * Find a Tagihan by ID.
     *
     * @param int $id
     * @return TagihanRepository
     */
    public function find($id)
    {
        return Tagihan::find($id);
    }

    /**
     * Get all Tagihans.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Tagihan::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}


