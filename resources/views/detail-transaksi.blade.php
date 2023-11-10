<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: rgb(124, 155, 255)">
  <h1 class="text-center">Tambah Transaksi Baru</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card bg-body-secondary">
          <div class="card-body">
            <form action="/edit-transaksi/{{ $detail_transaksi->id }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control"name="kode_transaksi" value="{{ $detail_transaksi->kode_transaksi }}" disabled>
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control"name="tanggal_transaksi" value="{{ $detail_transaksi->tanggal_transaksi }}" disabled>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control"name="nama_barang" value="{{ $detail_transaksi->nama_barang }}" disabled>
              </div>
              <div class="mb-3">
                <label class="form-label">Status Pembayaran</label>
                <select class="form-select" name="status_pembayaran">
                  <option selected>Pilih Status Pembayaran</option>
                  <option value="Menunggu" >Menunggu</option>
                  <option value="Diterima">Diterima</option>
                  <option value="Dibatalkan">Dibatalkan</option>
                </select>
              <div class="mb-3 mt-3">
                <label class="form-label">Total Biaya</label>
                <input type="number" class="form-control" name="total_biaya" value="{{ $detail_transaksi->total_biaya }}" disabled>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>