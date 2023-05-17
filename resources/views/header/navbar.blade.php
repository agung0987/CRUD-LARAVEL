<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas 17 Agustus 1945</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary shadow fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand text-white" style="margin-left:20px" href="{{ url('/Stack')}}" >Universitas 17 Agustus 1945</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="navbar-text" style="margin-right:30px">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/tentangKami')}}">Fakultas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ url('/index-mhs')}}">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/gitHub')}}">Program Studi</a>
        </li>
      </ul>
    </div>
    </span>

  </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</html>