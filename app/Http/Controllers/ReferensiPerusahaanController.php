<?php

use App\Repositories\ReferensiPerusahaanRepositoryRepository;

class ReferensiPerusahaanController extends Controller
{
    protected $referensiPerusahaanRepository;

    public function __construct(ReferensiPerusahaanRepositoryRepository $referensiPerusahaanRepository)
    {
        $this->referensiPerusahaanRepository = $referensiPerusahaanRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->referensiPerusahaanRepository untuk mengakses data Referensi Perusahaan.
}

