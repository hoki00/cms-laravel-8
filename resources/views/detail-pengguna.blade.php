<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <title>{{ $title }}</title> --}}
  <title>Halaman Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: rgb(124, 155, 255)">
  <h1 class="text-center">Ubah Data Pengguna</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="/edit-pengguna/{{ $detail->id }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="{{ $detail->nama }}" disabled>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="{{ $detail->username }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $detail->email }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="jenis_kelamin" value="{{ $detail->jenis_kelamin }}" disabled>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ $detail->password }}" disabled>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>