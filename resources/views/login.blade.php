<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Login</title>
  <style>
    .form-label{
      font-weight: bold;
    }
  </style>
</head>
<body>
  <form class="container-lg p-4 mt-5 shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 350px;border-radius:20px;" action="/login" method="POST">
    @csrf
    <h2 align="center">Login</h2>
    @if($errors->any())
      <div class="alert alert-danger mt-4 p-1 text-center" role="alert">
        {{ $errors->first()}}
      </div>
    @endif
    <div class="mt-4 mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control border border-2 border-dark-subtle" id="email" placeholder="name@example.com" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control border border-2 border-dark-subtle" id="password" placeholder="Password" required></input>
    </div>
    <div class="d-flex justify-content-between">
      <input class="btn btn-secondary mt-3" type="submit" value="Login">
      <p style="font-size: 12px;margin:auto 0;">Don't have an account?<a href="/register" class="text-decoration-none"> Register here.</a></p>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>