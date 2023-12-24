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
  <h2>Registration Form</h2>
  <form action="{{ route('add') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
     <div class="mb-3 mt-3">
      <label for="email">Phone:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter phone" name="phone">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">File choosen:</label>
      <input type="file" class="form-control" id="email" placeholder="Enter image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
