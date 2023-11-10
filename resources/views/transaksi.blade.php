<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Report Transaksi</title>
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

  <h1 style="margin: 20px;">List Report Transaksi</h1>


  <div class="container text-center mt-5">
    <div class="row">
      <div class="col-2">
        {{-- Tambah Data --}}
        <a href="/tambah-transaksi" class="btn btn-success">Tambah Data Baru</a>
      </div>
      <div class="col-4">
        {{-- Search --}}
        <form action="/transaksi/search" class="d-flex">
          <input type="text" name="searchKodeTransaksi" class="form-control">
          <button class="btn btn-secondary" type="submit">
            <span class="material-symbols-outlined">
              search
            </span>
          </button>
        </form> 
      </div>
      <div class="col-4">
        {{-- Filter --}}
        <form action="/transaksi/filter" class="d-flex" method="get">
          <select name="filterStatusPembayaran" class="form-select">
            <option value="">Status Pembayaran</option>
            <option value="Menunggu">Menunggu</option>
            <option value="Diterima">Diterima</option>
            <option value="Dibatalkan">Dibatalkan</option>
          </select>
          <button class="btn btn-success" type="submit">Filter</button>
        </form>
      </div>
      <div class="col-2">
        {{-- Download --}}
        <div class="col-auto">
          <a href="/downloadDataTransaksi" class="btn btn-primary">DOWNLOAD PDF</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 text-center">
    <table class="table table-hover table-striped">
      <thead>
        <tr class="table-secondary">
          <th scope="col">ID</th>
          <th scope="col">Kode Transaksi</th>
          <th scope="col">Tanggal Transaksi</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Status Pembayaran</th>
          <th scope="col">Total Biaya</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($list as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->kode_transaksi }}</td>
          <td>{{ $item->tanggal_transaksi }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->status_pembayaran }}</td>
          <td>{{ $item->total_biaya }}</td>
          <td class="d-flex justify-content-evenly">
            <div style="background-color:rgba(255, 170, 0, 0.884); width:45%;">
              <a href="/detail-transaksi/{{ $item->id }}">
                <span class="material-symbols-outlined align-middle">
                  visibility
                </span>
              </a>
            </div>
            <div style="background-color:rgb(235, 135, 135); width:45%">
              <a href="/hapus-transaksi/{{ $item->id }}" onclick="return confirm('Are You Sure?')">
                <span class="material-symbols-outlined align-middle">
                  delete
                </span>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</body>
</html>