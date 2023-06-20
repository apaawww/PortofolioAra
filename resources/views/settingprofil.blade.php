@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio | Profil</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
          background-color: #C4D7B2;
          font-family: monospace
        }
      </style>
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-2">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h4 class="text-center fw-bold ">My Profil</h4>
                    <div class="form-group">
                        <div class="col-mb-3 mt-4">
                            <label class="form-label fw-bold" for="">Nisn</label>
                            <input class="form-control" type="text" name="nisn" id="nisn" value="{{ $nisn }}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama Lengkap</label>
                            <input class="form-control" type="text" name="namalengkap" id="namalengkap" value="{{ $namalengkap }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Status</label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ $status }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Tempat Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ttl" id="ttl" value="{{ $ttl }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $alamat }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Sekolah</label>
                            <input class="form-control" type="text" name="sekolah" id="sekolah" value="{{ $sekolah }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">No Hp</label>
                            <input class="form-control" type="text" name="nohp" id="nohp" value="{{ $nohp }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Email</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ $email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">About</label>
                            <input class="form-control" type="text" name="about" id="about" value="{{ $about }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="fw-bold" for="foto">Foto</label>
                            <img src="/storage/{{ $foto }}" alt="" width="70" height="100">
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-3">
                            <input class="form-control btn" style="background-color: #A0C49D;" type="submit" value="Simpan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
</body>
</html>
@endsection
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
