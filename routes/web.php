<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// ->name('employees.index'); this 'employee.index' is just a name given by us so there is no difference if we write something else as well.

Route::get("/employees", [EmployeeController::class, 'index'])->name('employees.index');
