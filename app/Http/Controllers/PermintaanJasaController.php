<?php


use App\Repositories\PermintaanJasaRepositoryRepository;

class PermintaanJasaController extends Controller
{
    protected $permintaanJasaRepository;

    public function __construct(PermintaanJasaRepositoryRepository $permintaanJasaRepository)
    {
        $this->permintaanJasaRepository = $permintaanJasaRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->permintaanJasaRepository untuk mengakses data Permintaan Jasa.
}

