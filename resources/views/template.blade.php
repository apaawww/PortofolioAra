<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio --temp | Arafah Salsabila</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #A0C49D;">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto ms-auto">
            <li class="nav-item">
              <a href="setprofil" class="nav-link{{ Request::segment(1)=='profil'?'active':'' }}">Profil</a>
            </li>
            <li class="nav-item">
              <a href="portofolio" class="nav-link{{ Request::segment(1)=='portofolio'?'active':'' }}">Portofolio</a>
            </li>
            <li class="nav-item">
              <a href="contact" class="nav-link{{ Request::segment(1)=='contact'?'active':'' }}">Contact</a>
            </li>
            <li class="nav-item">
              <a href="user/logout" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

@yield('content')
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

