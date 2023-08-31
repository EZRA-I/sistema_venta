<?php

namespace App\Http\Controllers;

use App\Models\City;
//use App\Models\Bill;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::paginate(10)
        ]);
    }

    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('employees.create', compact('cities' )); //bills
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'city_id' =>'required|integer',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'post' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        Employee::create($data);

        return back()->with('message', 'Employee created.');
    }




    public function edit(Employee $employee)
    {
        $cities = City::orderBy('name')->get();
        return view ('employees.edit', compact('employee', 'cities')); //'bills
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'city_id' =>'required|integer',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'post' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        $employee->update($data);

        return back()->with('message', 'Employee updated.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back()->with('message', 'Employee deleted.');
    }
}


