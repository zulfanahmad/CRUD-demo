<?php

use App\Repositories\PembayaranAtasPembelianRepositoryRepository;

class PembayaranAtasPembelianController extends Controller
{
    protected $pembayaranAtasPembelianRepository;

    public function __construct(PembayaranAtasPembelianRepositoryRepository $pembayaranAtasPembelianRepository)
    {
        $this->pembayaranAtasPembelianRepository = $pembayaranAtasPembelianRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->pembayaranAtasPembelianRepository untuk mengakses data Pembayaran Atas Pembelian.
}

