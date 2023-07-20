@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Kendaraan</h3>
        <form action="{{ url('/kendaraan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="kendaraan_plat">PLAT</label>
                <input type="text" id="kendaraan_plat" name="kendaraan_plat" class="form-control" placeholder="PLAT KENDARAAN">
            </div>
            <div class="mb-3">
                <label for="kendaraan_nama">NAMA</label>
                <input type="text" id="kendaraan_nama" name="kendaraan_nama" class="form-control" placeholder="NAMA KENDARAAN">
            </div>
            <div class="mb-3">
                <label for="kendaraan_jenis">JENIS</label>
                <select name="kendaraan_jenis" id="kendaraan_jenis" class="form-control">
                    <option value="Mobil">Mobil</option>
                    <option value="Sepeda Motor">Sepeda Motor</option>
                </select>    
            </div>
            <div class="mb-3">
                <label for="kendaraan_tarif">TARIF</label>
                <input type="number" id="kendaraan_tarif" name="kendaraan_tarif" class="form-control" placeholder="TARIF KENDARAAN">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection