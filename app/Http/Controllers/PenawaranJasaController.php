<?php

use App\Repositories\PenawaranJasaRepositoryRepository;

class PenawaranJasaController extends Controller
{
    protected $penawaranJasaRepository;

    public function __construct(PenawaranJasaRepositoryRepository $penawaranJasaRepository)
    {
        $this->penawaranJasaRepository = $penawaranJasaRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->penawaranJasaRepository untuk mengakses data Penawaran Jasa.
}

