@extends('layouts.app')
@section('content')
<h2>Data Pesanan</h2>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session ('success')}}
    </div>
@endif
<a class="btn btn-primary btn-sm float-end mb-3" href="{{ url('pesanan/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr>
            <td>ID. PESANAN</td>
            <td>KENDARAAN</td>
            <td>PELANGGAN</td>
            <td>PESANAN HARI</td>
            <td>PESANAN TOTAL</td>
            <td>EDIT</td>
            <td>HAPUS</td>
    </tr>
    @foreach ($rows as $row)
    <tr>
            <td>{{ $row->pesanan_id}}</td>
            <td>{{ $row->kendaraan->kendaraan_nama}} - {{ $row->kendaraan->kendaraan_plat}}</td>
            <td>{{ $row->pelanggan->pelanggan_nama}} - {{ $row->pelanggan->pelanggan_nik}}</td>
            <td>{{ $row->pesanan_hari}}</td>
            <td>@currency($row->pesanan_total)</td>
        <td><a class="btn btn-info btn-sm float" href="{{url('pesanan/' .$row->pesanan_id. '/edit')}}">Edit</a></td>
        <td>
            <form action="{{url('pesanan/' .$row->pesanan_id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection