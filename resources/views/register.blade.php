<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Register</title>
  <style>
    .form-label{
      font-weight: bold;
    }
    .alert{
      font-size: 11px;
    }
  </style>
</head>
<body>
  <form class="container-lg p-4 mt-5 shadow-lg p-3 mb-5 bg-white" style="max-width: 350px;border-radius:20px;" action="/register" method="POST">
    @csrf
    <h2 align="center">Register</h2>
  
    <div class="mt-4 mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control border border-2 border-dark-subtle" id="name" placeholder="Name" required></input>
      @error('name')
        <div class="alert alert-danger p-1 text-center">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control border border-2 border-dark-subtle" id="email" placeholder="name@example.com" required>
      @error('email')
        <div class="alert alert-danger p-1 text-center">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control border border-2 border-dark-subtle" id="password" placeholder="Password" required></input>
      @error('password')
        <div class="alert alert-danger p-1 text-center">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm password</label>
      <input type="password" name="password_confirmation" class="form-control border border-2 border-dark-subtle" id="password_confirmation" placeholder="Confirm password" required></input>
      @error('password_confirmation')
        <div class="alert alert-danger p-1 text-center">{{ $message }}</div>
      @enderror
    </div>
    <div class="d-flex justify-content-between">
      <input class="btn btn-secondary mt-3" type="submit" value="Register">
      <p style="font-size: 12px;margin:auto 0;">Already have an account?<a href="/login" class="text-decoration-none"> Login here.</a></p>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>