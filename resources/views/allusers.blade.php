<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All Users</h1>
                <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New User</a>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach ($data as $id => $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->city }}</td>
                        <td><a href="{{ route('view.user', $user->id )}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{ route('delete.user', $user->id )}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{ route('update.page', $user->id )}}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>





