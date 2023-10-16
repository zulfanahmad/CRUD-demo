<?php

use App\Repositories\UserRepositoryRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->userRepository untuk mengakses data.
}

