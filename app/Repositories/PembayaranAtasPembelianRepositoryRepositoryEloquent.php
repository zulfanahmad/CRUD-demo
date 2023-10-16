<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PembayaranAtasPembelianRepositoryRepository;
/**use App\Entities\PembayaranAtasPembelianRepository;*/
use App\Models\PembayaranAtasPembelian;
use App\Validators\PembayaranAtasPembelianRepositoryValidator;

/**
 * Class PembayaranAtasPembelianRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PembayaranAtasPembelianRepositoryRepositoryEloquent extends BaseRepository implements PembayaranAtasPembelianRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PembayaranAtasPembelian::class;
    }

    /**
     * Create a new Pembayaran Atas Pembelian.
     *
     * @param array $data
     * @return PembayaranAtasPembelianRepository
     */
    public function create(array $data)
    {
        return PembayaranAtasPembelian::create($data);
    }

    /**
     * Update a Pembayaran Atas Pembelian by ID.
     *
     * @param array $data
     * @param int $id
     * @return PembayaranAtasPembelianRepository
     */
    public function update(array $data, $id)
    {
        $pembayaran = PembayaranAtasPembelian::find($id);
        $pembayaran->update($data);
        return $pembayaran;
    }

    /**
     * Delete a Pembayaran Atas Pembelian by ID.
     *
     * @param int $id
     * @return int
     */
    public function delete($id)
    {
        return PembayaranAtasPembelian::destroy($id);
    }

    /**
     * Find a Pembayaran Atas Pembelian by ID.
     *
     * @param int $id
     * @return PembayaranAtasPembelianRepository
     */
    public function find($id)
    {
        return PembayaranAtasPembelian::find($id);
    }

    /**
     * Get all Pembayaran Atas Pembelian.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return PembayaranAtasPembelian::all();
    }
    
    /**
     * Add more custom methods as needed.
     */
}


