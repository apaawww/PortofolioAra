@extends('template')
@section('content')
<div class="container mt-4 pt-4">
    <div class="col-md-12">
    <a href="{{ url('portofolio/add') }}" class="btn btn-light mb-3">Tambah Data</a>
    <table style="background-color: #A0C49D;" class="table table-striped table-bordered text-center">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
        @foreach ($portofolio as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->namaporto }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <img src="/storage/{{ $item->foto }}" alt="" width="70">
                </td>
                <td>
                    <a href="portofolio/edit/{{ $item->id }}" class="btn btn-outline-success btn-sm">Edit</a>
                    <a href="portofolio/hapus/{{ $item->id }}" class="btn btn-outline-danger btn-sm" onclick="return window.confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
