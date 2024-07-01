<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPLE LARAVEL 11 CRUD </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">//


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
                <a href="{{route('employee.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>


        <form action="">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter Address"
                            class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>