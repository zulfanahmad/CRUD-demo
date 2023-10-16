<?php

use App\Http\Controllers\Controller;
use App\Repositories\KlienRepositoryRepository;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    protected $klienRepository;

    public function __construct(KlienRepositoryRepository $klienRepository)
    {
        $this->klienRepository = $klienRepository;
    }

    public function index()
    {
        // Mengambil daftar Klien dan menampilkan tampilan index
        $kliens = $this->klienRepository->all();
        return view('kliens.index', compact('kliens'));
    }

    public function create()
    {
        // Menampilkan formulir pembuatan Klien
        return view('kliens.create');
    }

    public function store(Request $request)
    {
        // Menyimpan data Klien yang baru dibuat
        $data = $request->all();
        $klien = $this->klienRepository->create($data);
        return redirect()->route('kliens.index');
    }

    public function show($id)
    {
        // Menampilkan detail Klien
        $klien = $this->klienRepository->find($id);
        return view('kliens.show', compact('klien'));
    }

    public function edit($id)
    {
        // Menampilkan formulir pengeditan Klien
        $klien = $this->klienRepository->find($id);
        return view('kliens.edit', compact('klien'));
    }

    public function update(Request $request, $id)
    {
        // Memperbarui data Klien yang ada
        $data = $request->all();
        $klien = $this->klienRepository->update($data, $id);
        return redirect()->route('kliens.index');
    }

    public function destroy($id)
    {
        // Menghapus Klien
        $this->klienRepository->delete($id);
        return redirect()->route('kliens.index');
    }
}

