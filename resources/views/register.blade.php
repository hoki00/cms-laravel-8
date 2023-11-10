<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="card mt-5 col-md-4">
        <h1 class="h3 my-4 fw-normal text-center">Register</h1>
        <form action="/adminregister" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <p>
            <a href="/login" class="fs-6 text-decoration-none"><small>Click Here to Login...</small></a>
          </p>
          <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>