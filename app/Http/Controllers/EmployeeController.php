<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("employee.list");
    }
    public function create()
    {
        echo "Create Form";
    }
}
