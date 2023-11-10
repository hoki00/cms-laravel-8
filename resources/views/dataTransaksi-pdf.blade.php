<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    * {
      text-align: center
    }
    th,td {
      border: 0.5px solid black;
    }
  </style>
</head>
<body>
  <h1 class="mb-3">Daftar Transaksi</h1>
  <div class="container mt-3 text-center">
    <table class="table table-striped">
      <thead>
        <tr style="background-color: aquamarine;">
          <th scope="col">ID</th>
          <th scope="col">Kode Transaksi</th>
          <th scope="col">Tanggal Transaksi</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Total Biaya</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dataTransaksi as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->kode_transaksi }}</td>
          <td>{{ $item->tanggal_transaksi }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->total_biaya }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>


