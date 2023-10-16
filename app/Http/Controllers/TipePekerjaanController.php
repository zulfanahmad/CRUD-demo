<?php

use App\Repositories\TipePekerjaanRepositoryRepository;

class TipePekerjaanController extends Controller
{
    protected $tipePekerjaanRepository;

    public function __construct(TipePekerjaanRepositoryRepository $tipePekerjaanRepository)
    {
        $this->tipePekerjaanRepository = $tipePekerjaanRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->tipePekerjaanRepository untuk mengakses data Tipe Pekerjaan.
}

