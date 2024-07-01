<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPLE LARAVEL 11 CRUD </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


</head>

<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">SIMPLE LARAVEL 11 CRUD</div>
        </div>
    </div>
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h5">Employees</div>
            <div>
                <a href="{{route('employee.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="card" border-0 shadow-lg>
            <div class="card-body">
                <table class="table atble-stripped">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>Name</td>
                        <td>Email2gmail.com</td>
                        <td>Address</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
</body>

</html>