@extends('layouts.app')

@section('content')
<h2>Data Pelanggan</h2>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session ('success')}}
    </div>
@endif
<a class="btn btn-primary btn-sm float-end mb-3" href="{{ url('pelanggan/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>EMAIL</th>
        <th>NO. HP</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->pelanggan_nik }}</td>
        <td>{{ $row->pelanggan_nama }}</td>
        <td>{{ $row->pelanggan_alamat }}</td>
        <td>{{ $row->pelanggan_jenkel }}</td>
        <td>{{ $row->pelanggan_email }}</td>
        <td>{{ $row->pelanggan_nohp }}</td>
        <td><a class="btn btn-info btn-sm float" href="{{url('pelanggan/' .$row->pelanggan_id. '/edit')}}">Edit</a></td>
        <td>
            <form action="{{url('pelanggan/' .$row->pelanggan_id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection