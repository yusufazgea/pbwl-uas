@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Kendaraan</h3>
        <form action="{{ url('/kendaraan/' .$row->kendaraan_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="kendaraan_plat">PLAT</label>
                <input type="text" id="kendaraan_plat" name="kendaraan_plat" class="form-control" placeholder="PLAT KENDARAAN" value="{{$row->kendaraan_plat}}">
            </div>
            <div class="mb-3">
                <label for="kendaraan_nama">NAMA</label>
                <input type="text" id="kendaraan_nama" name="kendaraan_nama" class="form-control" placeholder="NAMA KENDARAAN" value="{{$row->kendaraan_nama}}">
            </div>
            <div class="mb-3">
                <label for="kendaraan_jenis">JENIS</label>
                <select name="kendaraan_jenis" id="kendaraan_jenis" class="form-control">
                    <option value="Mobil" {{ $row->kendaraan_jenis == "Mobil" ? "selected" : "" }}>Mobil</option>
                    <option value="Sepeda Motor" {{ $row->kendaraan_jenis == "Sepeda Motor" ? "selected" : "" }}>Sepeda Motor</option>
                </select>    
            </div>
            <div class="mb-3">
                <label for="kendaraan_tarif">TARIF</label>
                <input type="number" id="kendaraan_tarif" name="kendaraan_tarif" class="form-control" placeholder="TARIF KENDARAAN" value="{{$row->kendaraan_tarif}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection