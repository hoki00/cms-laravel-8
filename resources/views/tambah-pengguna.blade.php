<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: rgb(124, 155, 255)">
  <h1 class="text-center">Tambah Pengguna Baru</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card bg-body-secondary">
          <div class="card-body">
            <form action="/tambah-pengguna" method="POST">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              <div class="mb-3 mt-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
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