@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Pelanggan</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="pelanggan_nik">NIK</label>
                <input type="number" id="pelanggan_nik" name="pelanggan_nik" class="form-control" placeholder="NIK KTP">
            </div>
            <div class="mb-3">
                <label for="pelanggan_nama">NAMA</label>
                <input type="text" id="pelanggan_nama" name="pelanggan_nama" class="form-control" placeholder="NAMA PELANGGAN">
            </div>
            <div class="mb-3">
                <label for="pelanggan_alamat">ALAMAT</label>
                <input type="text" id="pelanggan_alamat" name="pelanggan_alamat" class="form-control" placeholder="ALAMAT PELANGGAN">
            </div>
            <div class="mb-3">
                <label for="pelanggan_jenkel">JENIS</label>
                <select name="pelanggan_jenkel" id="pelanggan_jenkel" class="form-control">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>    
            </div>
            <div class="mb-3">
                <label for="pelanggan_email">EMAIL</label>
                <input type="email" id="pelanggan_email" name="pelanggan_email" class="form-control" placeholder="EMAIL PELANGGAN">
            </div>
            <div class="mb-3">
                <label for="pelanggan_nohp">No. Hp</label>
                <input type="number" id="pelanggan_nohp" name="pelanggan_nohp" class="form-control" placeholder="NO.HP PELANGGAN">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection