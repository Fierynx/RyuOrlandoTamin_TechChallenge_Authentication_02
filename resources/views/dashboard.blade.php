<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>User Dashboard</title>
</head>
<body>
  <form class="container-lg p-4 mt-5 shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 500px;border-radius:20px;" action="/logout" method="POST">
    @csrf
    <p style="font-size: 22px;font-weight:bold;margin-bottom:0;">Hi, {{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <button class="btn btn-outline-secondary" type="submit">Log out</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>