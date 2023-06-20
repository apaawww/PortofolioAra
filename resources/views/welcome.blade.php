<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio | Arafah Salsabila</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
          background-color: #C4D7B2;
          font-family: monospace
        }
    </style>
</head>
<body>
     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #A0C49D;">
      <div class="container">
          <a class="navbar-brand" href="#">MyPortofolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Akhir Navbar-->
      <!--Home-->
    <section id="home">
    <div class="container-fluid p-5">
        <div class="text-bg-chocolate text-center p-5 ">
            <img src="/storage/{{ $profil->foto }}" alt="araa" width="150" class="img-thumbnail rounded-circle">
            <h2 class="fw-bold mt-3">{{ $profil->namalengkap }}</h2>
            <p class="fs-5">{{ $profil->status }}</p>
        </div>
    </div>
    </section>
    <!--Akhir Home-->
    
    <!--About Me-->
    <section id="about" class="pt-5">
    <div class="container">
    <div class="p-5 text-center">
      <h3 class="fw-bpld mb-3">About Me</h3>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <p>{{ $profil->about }}</p>
        </div>
        {{-- <div class="col-md-4">
          <p>Sebagai seorang pelajar, saya juga mempunyai minat dalam berorganisasi seperti Pramuka dan OSIS, saya memiliki kemampuan untuk bekerjasama dalam tim dan berkomunikasi dengan baik. Saya bertekad untuk terus belajar dan meningkatkan kemampuan dan bakat saya, sehingga dapat menjadi seorang yang sukses dimasa depan dan menjadi wanita karier yang tangguh</p>
        </div> --}}
      </div>
    </div>
    </div>
    </section>
    <!--Akhir About-->
    
    <!--My projects-->
<section id="portofolio" class="page-section portofolio">
    <div class="container-fluid text-center">
      <h3 class="fw-bold mb-3">Portofolio</h3>
      <div class="row justify-content-center">
            @foreach ($portofolio as $item)    
                <div class=" col col-md-4 mb-5 text-center">
                    <div class="card mt-5 ms-4">
                        <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p>{{ $item->namaporto }}</p>
                            <p>{{ $item->kategori }}</p>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    <!--Akhir Projects-->
    
    <!--Contact Me-->
    <section class="contact">
    <div class="container p-5">
    <h3 class="fw-bold text-center mb-3">Contact Me</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action=" {{ url('contact/create') }}" method="post" id="form-contact">
            @csrf
          <div class="col-mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap <span></span></label>
            <input type="text"  class="form-control" name="nama" id="nama" autocomplete="off" placeholder="Masukkan Nama Lengkap">
          </div>
          <div class="col-mb-3">
            <label for="email" class="form-label">Email <span></span></label>
            <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Masukkan Email">
          </div>
          <div class="col-mb-3">
            <label for="pesan" class="form-label">Pesan <span></span></label>
            <input type="text" class="form-control" name="pesan" id="pesan" placeholder="Masukkan Pesan">
          </div>
          <button type="submit" class="form-control btn mt-3" style="background-color: #A0C49D;">Kirim</button>
        </form>
      </div>
    </div>
    </div>
    </section>
    <!--Akhir Contact Me-->
    <!--Footer-->
    <div class="container-fluid">
    <footer class="py-3 my-3 border-top">
      <p class="text-center">&copy;2023 <a href="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">Arafah Salsabila</a></p>
    </footer>
    </div>
    <!--Akhir Footer-->
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
