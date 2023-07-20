<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kendaraan::all();
        return view('kendaraan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kendaraan::create(
            [
                'kendaraan_plat' => $request->kendaraan_plat,
                'kendaraan_nama' => $request->kendaraan_nama,
                'kendaraan_jenis' => $request->kendaraan_jenis,
                'kendaraan_tarif' => $request->kendaraan_tarif
            ]
        );

        return redirect('kendaraan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Kendaraan::findOrFail($id);
        $row->update(
            [
                'kendaraan_plat' => $request->kendaraan_plat,
                'kendaraan_nama' => $request->kendaraan_nama,
                'kendaraan_jenis' => $request->kendaraan_jenis,
                'kendaraan_tarif' => $request->kendaraan_tarif
            ]
        );
        return redirect('kendaraan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kendaraan::findOrFail($id);
        $row->delete();

        return redirect('kendaraan')->with('success', 'Data berhasil dihapus');
    }
}
