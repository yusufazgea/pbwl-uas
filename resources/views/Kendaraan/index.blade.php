@extends('layouts.app')

@section('content')
<h2>Data Kendaraan</h2>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session ('success')}}
    </div>
@endif
<a class="btn btn-primary btn-sm float-end mb-3" href="{{ url('kendaraan/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>PLAT</th>
        <th>NAMA</th>
        <th>JENIS</th>
        <th>TARIF</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->kendaraan_plat }}</td>
        <td>{{ $row->kendaraan_nama }}</td>
        <td>{{ $row->kendaraan_jenis }}</td>
        <td>@currency($row->kendaraan_tarif)/Hari</td>
        <td><a class="btn btn-info btn-sm float" href="{{url('kendaraan/' .$row->kendaraan_id. '/edit')}}">Edit</a></td>
        <td>
            <form action="{{url('kendaraan/' .$row->kendaraan_id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection