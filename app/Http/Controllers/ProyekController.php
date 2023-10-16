
<?php

use App\Repositories\ProyekRepositoryRepository;

class ProyekController extends Controller
{
    protected $proyekRepository;

    public function __construct(ProyekRepositoryRepository $proyekRepository)
    {
        $this->proyekRepository = $proyekRepository;
    }

    // Fungsi-fungsi CRUD di sini akan menggunakan $this->proyekRepository untuk mengakses data Proyek.
}

