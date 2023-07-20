@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Pesanan</h3>
        <form action="{{ url('/pesanan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="pesanan_kendaraan_id">KENDARAAN</label>
                <select name="pesanan_kendaraan_id" id="pesanan_kendaraan_id" class="form-control">
                    @foreach ($kendaraan as $ken)
                        <option value="{{$ken->kendaraan_id}}-{{$ken->kendaraan_tarif}}">{{$ken->kendaraan_nama}} - {{$ken->kendaraan_plat}} - @currency($ken->kendaraan_tarif)/Hari</option>
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">
                <label for="pesanan_pelanggan_id">PELANGGAN</label>
                <select name="pesanan_pelanggan_id" id="pesanan_pelanggan_id" class="form-control">
                    @foreach ($pelanggan as $pel)
                        <option value="{{$pel->pelanggan_id}}">{{$pel->pelanggan_nik}} - {{$pel->pelanggan_nama}}</option>
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">
                <label for="pesanan_hari">PESANAN HARI</label>
                <input type="number" id="pesanan_hari" name="pesanan_hari" class="form-control" placeholder="PESANAN HARI">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection