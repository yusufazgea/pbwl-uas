<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pesanan::all();
        return view('pesanan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create',[
            'kendaraan' => Kendaraan::get(),
            'pelanggan' => Pelanggan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $kendaraan = explode('-',$request->pesanan_kendaraan_id);
        $kendaraan_id = $kendaraan[0];
        $kendaraan_tarif = $kendaraan[1];
        Pesanan::create(
            [
                'pesanan_pelanggan_id' => $request->pesanan_pelanggan_id,
                'pesanan_kendaraan_id' => $kendaraan_id,
                'pesanan_hari' => $request->pesanan_hari,
                'pesanan_total' => $request->pesanan_hari*$kendaraan_tarif
            ]
        );

        return redirect('pesanan')->with('success','Data berhasil ditambahkan');
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
        $row = Pesanan::findOrFail($id);
        return view('pesanan.edit', [
            'kendaraan' => Kendaraan::get(),
            'pelanggan' => Pelanggan::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pesanan::findOrFail($id);
        $kendaraan = explode('-',$request->pesanan_kendaraan_id);
        $kendaraan_id = $kendaraan[0];
        $kendaraan_tarif = $kendaraan[1];
        $row->update(
            [
                'pesanan_pelanggan_id' => $request->pesanan_pelanggan_id,
                'pesanan_kendaraan_id' => $kendaraan_id,
                'pesanan_hari' => $request->pesanan_hari,
                'pesanan_total' => $request->pesanan_hari*$kendaraan_tarif
            ]
        );
        return redirect('pesanan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pesanan::findOrFail($id);
        $row->delete();

        return redirect('pesanan')->with('success', 'Data berhasil dihapus');
    }
}