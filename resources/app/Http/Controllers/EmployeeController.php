<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $newEmployee = Employee::create($data);
        return redirect(route('employees.index'));
    }



    // {
    //     public function index()
    //     {
    //         return view("employee.list");
    //     }
    //     public function create()
    //     {
    //         return view('employee.create');
    //     }
    //     public function store(Request $request)
    //     {
    //         $validator = Validator::make($request->all(), [
    //             'name' => 'required',
    //             'email' => 'required',
    //             'address' => 'sometimes',

    //         ]);
    //         if ($validator->passes()) {
    //             // save data here
    //             $employee = new Employee();
    //             $employee->name = $request->name;
    //             $employee->email = $request->email;
    //             $employee->address = $request->address;
    //             $employee->save();

    //             return redirect()->route('employee.index')->with('success', 'Employee Added Successfully.');
    //         } else {
    //             return redirect()->route('employee.create')->withErrors($validator)->withInput();
    //         }
    //     }
}
