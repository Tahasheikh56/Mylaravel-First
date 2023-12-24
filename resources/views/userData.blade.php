@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<table class="table table-bordered table-striped table-hover text-center">
    <thead class="table-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($data as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->name }}</td>
                <td>{{ $new->phone }}</td>
                <td>{{ $new->email }}</td>
                <td>{{ $new->password }}</td>
                <td><img src="{{ $new->image }}" width="50px" height="50px" class="rounded-circle" alt="" srcset=""></td>
                <td><a href="{{ route('editFetch', $new->id) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('delete', $new->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>