<?php

use App\Repositories\ReferensiBahasaRepositoryRepository;

class ReferensiBahasaController extends Controller
{
    protected $referensiBahasaRepository;

    public function __construct(ReferensiBahasaRepositoryRepository $referensiBahasaRepository)
    {
        $this->referensiBahasaRepository = $referensiBahasaRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->referensiBahasaRepository untuk mengakses data Referensi Bahasa.
}

