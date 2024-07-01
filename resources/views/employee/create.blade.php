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
        <div class="d-flex justify-content-between ">
            <div class="h5">Employees</div>
            <div>
                <a href="{{route('employee.index')}}" class="btn btn-primary ">Back</a>
            </div>
        </div>


        <form action="{{route('employee.store')}}" method="POST">
            @csrf

            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="
                            {{old('name')}}">


                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control" value="
                            {{old('email')}}">

                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter Address"
                            class="form-control">{{old('address')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        {{-- <input type="file" name="image"> --}}
                    </div>
                </div>
                <button class=" btn btn-primary mt-3">Save Employee</button>
            </div>
        </form>
    </div>

</body>

</html>