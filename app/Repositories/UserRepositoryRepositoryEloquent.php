<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepositoryRepository;
/**use App\Entities\User;*/
use App\Models\User;
use App\Validators\UserRepositoryValidator;

/**
 * Class UserRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryRepositoryEloquent extends BaseRepository implements UserRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Create a new user.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create($data);
    }

    /**
     * Update a user by ID.
     *
     * @param array $data
     * @param int $id
     * @return User
     */
    public function update(array $data, $id)
    {
        $user = User::find($id);
        $user->update($data);
        return $user;
    }

    /**
     * Delete a user by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return User::destroy($id);
    }

    /**
     * Find a user by ID.
     *
     * @param int $id
     * @return User
     */
    public function find($id)
    {
        return User::find($id);
    }

    /**
     * Get all users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return User::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}

