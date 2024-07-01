<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("employee.list");
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'sometimes|image:gif,png,jpeg,jpg',

        ]);
        if ($validator->passes()) {
            // save data here
            $employee = new Employee();
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->address = $request->address;
            $employee->save();

            return redirect()->route('employee.index')->with('success', 'Employee Added Successfully.');
        } else {
            return redirect()->route('employee.create')->withErrors($validator)->withInput();
        }
    }
}
