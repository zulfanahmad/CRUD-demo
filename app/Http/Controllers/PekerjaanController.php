<?php

use App\Repositories\PekerjaanRepositoryRepository;

class PekerjaanController extends Controller
{
    protected $pekerjaanRepository;

    public function __construct(PekerjaanRepositoryRepository $pekerjaanRepository)
    {
        $this->pekerjaanRepository = $pekerjaanRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->pekerjaanRepository untuk mengakses data Pekerjaan.
}

