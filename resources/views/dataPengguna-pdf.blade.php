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
  <h1 class="mb-3">Daftar Pengguna</h1>
  <div class="container mt-3 text-center">
    <table class="table table-striped">
      <thead>
        <tr style="background-color: aquamarine;">
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Jenis Kelamin</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->jenis_kelamin }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>



