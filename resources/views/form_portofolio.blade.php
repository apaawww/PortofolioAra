@extends('template')
@section('content')
<div class="container mt-4 pt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">
        <div class="row justify-content-center align-item-center">
        <div class="col-md-4 py-4">
        <div class="form-group">
            <div class="col-mb-3">
                <label class="form-label fw-bold" for="">Nama Portofolio</label>
                <input class="form-control" type="text" name="namaporto" id="namaporto" value="{{ $portofolio->namaporto }}" placeholder="Masukkan nama portofolio">
            </div>
        </div>
        <div class="form-group">
            <div class="col-mb-3">
                <label class="form-label fw-bold" for="">Kategori</label>
                <input class="form-control" type="text" name="kategori" id="kategori" value="{{ $portofolio->kategori }}" placeholder="Masukkan kategori">
            </div>
        </div>
        <div class="form-group">
            <div class="col-mb-3">
                <label class="form-label fw-bold" for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{ $portofolio->deskripsi }}" placeholder="Masukkan deskripsi">
            </div>
        </div>
        <div class="form-group">
            <div class="col-mb-3">
                <label class="fw-bold" for="foto">Foto</label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
        </div>
        <div class="col-mb-3 mt-3">
            <div class="form-group">
                <input class=" form-control btn" style="background-color: #A0C49D;" type="submit" value="{{ $tombol }}">
            </div>
        </div>
        </div>
        </div>
        </div>
    </form>
</div>
@endsection
