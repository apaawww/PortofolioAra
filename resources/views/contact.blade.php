@extends('template')
@section('content')
<div class="container mt-4 pt-4">
    <div class="col-md-12">
    <table style="background-color: #A0C49D;" class="table table-striped table-bordered text-center">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PESAN</th>
            <th>AKSI</th>
        </tr>
        @foreach ($contact as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pesan }}</td>
                <td>
                    <a href="contact/hapus/{{ $item->id }}" class="btn btn-outline-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection