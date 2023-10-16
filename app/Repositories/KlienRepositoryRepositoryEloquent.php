<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\KlienRepositoryRepository;
use App\Models\Klien;
use App\Validators\KlienRepositoryValidator;

/**
 * Class KlienRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class KlienRepositoryRepositoryEloquent extends BaseRepository implements KlienRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Klien::class;
    }

    /**
     * Create a new Klien.
     *
     * @param array $data
     * @return Klien
     */
    public function create(array $data)
    {
        return Klien::create($data);
    }

    /**
     * Update a Klien by ID.
     *
     * @param array $data
     * @param int $id
     * @return Klien
     */
    public function update(array $data, $id)
    {
        $klien = Klien::find($id);
        $klien->update($data);
        return $klien;
    }

    /**
     * Delete a Klien by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return Klien::destroy($id);
    }

    /**
     * Find a Klien by ID.
     *
     * @param int $id
     * @return Klien
     */
    public function find($id)
    {
        return Klien::find($id);
    }

    /**
     * Get all Kliens.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Klien::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

