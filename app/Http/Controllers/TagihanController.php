<?php

use App\Repositories\TagihanRepositoryRepository;

class TagihanController extends Controller
{
    protected $tagihanRepository;

    public function __construct(TagihanRepositoryRepository $tagihanRepository)
    {
        $this->tagihanRepository = $tagihanRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->tagihanRepository untuk mengakses data Tagihan.
}

