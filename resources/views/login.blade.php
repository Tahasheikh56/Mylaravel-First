@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6 mt-5">
  <h2>Login Form</h2>
  <form action="{{ route('loginData') }}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
        <div class="col-lg-4"></div>
  </div>
</div>

</body>
</html>
