<?php

use App\Repositories\PesananPembelianRepositoryRepository;

class PesananPembelianController extends Controller
{
    protected $pesananPembelianRepository;

    public function __construct(PesananPembelianRepositoryRepository $pesananPembelianRepository)
    {
        $this->pesananPembelianRepository = $pesananPembelianRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->pesananPembelianRepository untuk mengakses data Pesanan Pembelian.
}

