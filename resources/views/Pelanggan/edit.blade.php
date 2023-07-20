@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' .$row->pelanggan_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="pelanggan_nik">NIK</label>
                <input type="number" id="pelanggan_nik" name="pelanggan_nik" class="form-control" placeholder="NIK KTP" value="{{$row->pelanggan_nik}}">
            </div>
            <div class="mb-3">
                <label for="pelanggan_nama">NAMA</label>
                <input type="text" id="pelanggan_nama" name="pelanggan_nama" class="form-control" placeholder="NAMA PELANGGAN" value="{{$row->pelanggan_nama}}">
            </div>
            <div class="mb-3">
                <label for="pelanggan_alamat">ALAMAT</label>
                <input type="text" id="pelanggan_alamat" name="pelanggan_alamat" class="form-control" placeholder="ALAMAT PELANGGAN" value="{{$row->pelanggan_alamat}}">
            </div>
            <div class="mb-3">
                <label for="pelanggan_jenkel">JENIS</label>
                <select name="pelanggan_jenkel" id="pelanggan_jenkel" class="form-control">
                    <option value="Laki - Laki" {{ $row->pelanggan_jenkel == "Laki - Laki" ? "selected" : "" }}>Laki - Laki</option>
                    <option value="Perempuan" {{ $row->pelanggan_jenkel == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                </select>    
            </div>
            <div class="mb-3">
                <label for="pelanggan_email">EMAIL</label>
                <input type="email" id="pelanggan_email" name="pelanggan_email" class="form-control" placeholder="EMAIL PELANGGAN" value="{{$row->pelanggan_email}}">
            </div>
            <div class="mb-3">
                <label for="pelanggan_nohp">No. Hp</label>
                <input type="number" id="pelanggan_nohp" name="pelanggan_nohp" class="form-control" placeholder="NO.HP PELANGGAN" value="{{$row->pelanggan_nohp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection