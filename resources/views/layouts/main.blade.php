<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiketku </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TiketKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <div class="dropdown">
              <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Master
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/rutes">Rutes</a></li>
                <li><a class="dropdown-item" href="/transportasi">Transportasi</a></li>
                <li><a class="dropdown-item" href="/typetransportasi">Type Transportasi</a></li>
              </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="/datapetugas">Data Petugas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/datapenumpang">Data Penumpang</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/datapemesanan">Data Pemesanan</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/validasi">Validasi</a>
            </li> 
            {{-- <li class="nav-item">
              <a class="nav-link" href="logout">Logout</a>
            </li>  --}}
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>