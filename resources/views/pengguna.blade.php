<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
</head>
<body style="background-color: rgb(124, 155, 255)">

  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/pengguna">Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/transaksi">Transaksi</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>  
  @endif

  <h1 style="margin: 20px;">Daftar Pengguna</h1>


  <div class="container text-center mt-5">
    <div class="row">
      <div class="col-2">
        {{-- Tambah Data --}}
        <a href="/tambah-pengguna" class="btn btn-success">Tambah Data Baru</a>
      </div>
      <div class="col-4">
        {{-- Search --}}
        <form action="/pengguna/search" class="d-flex">
          <input type="text" name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
          <button class="btn btn-secondary" type="submit">
            <span class="material-symbols-outlined">
              search
            </span>
          </button>
        </form> 
      </div>
      <div class="col-4">
        {{-- Filter --}}
        <form action="/pengguna/filter" class="d-flex" method="get">
          <select name="filterJenisKelamin" class="form-select">
            <option value="">Jenis Kelamin</option>
            <option value="laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
          <button class="btn btn-success" type="submit">Filter</button>
        </form>
      </div>
      <div class="col-2">
        {{-- Download --}}
        <div class="col-auto">
          <a href="/downloadPDF" class="btn btn-primary">DOWNLOAD PDF</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 text-center">
    <table class="table table-hover table-striped">
      <thead>
        <tr class="table-secondary">
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col" class="overflow-x-hidden" style="width:10%">Password</th>
          {{-- <th scope="col">Edit</th> --}}
          {{-- <th scope="col">Hapus</th> --}}
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($account as $item)
        <tr>
          <th scope="row">{{ $item['id'] }}</th>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->username }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->jenis_kelamin }}</td>
          <td>
            <div>{{ $item->password }}</div>
          </td>
          <td>
            <div class="d-flex justify-content-evenly">
              <div style="background-color:rgba(255, 170, 0, 0.884); width:45%;">
                <a href="/detail-pengguna/{{ $item->id }}">
                  <span class="material-symbols-outlined align-middle">
                    visibility
                  </span>
                </a>
              </div>
              <div style="background-color:rgb(235, 135, 135); width:45%">
                <a href="/hapus-pengguna/{{ $item->id }}" onclick="return confirm('Are You Sure?')">
                  <span class="material-symbols-outlined align-middle">
                    delete
                  </span>
                </a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</body>
</html>