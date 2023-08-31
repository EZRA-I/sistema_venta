<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\City;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index', [
           'bills' => Bill::paginate(10)
        ]);
    }

    public function create()
    {
        $employees = Employee::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $cities = City::orderBy('name')->get();
        return view('bills.create', compact('employees', 'customers', 'cities'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'total' => 'required|max:255',
            'subtotal' => 'required|max:255',
            'employee_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'city_id' => 'required|integer',
        ]);

        Bill::create($data);

        return back()->with('message', 'Bill created.');
    }

    public function edit(Bill $bill)
    {
        $employees = Employee::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $cities = City::orderBy('name')->get();
        return view('bills.edit', compact('employees',  'customers', 'cities'));
    }

    public function update(Bill $bill, Request $request)
    {
        $data = $request->validate([

            'total' => 'required|max:255',
            'subtotal' => 'required|max:255',
            'employee_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'city_id' => 'required|integer',
        ]);

        $bill->update($data);

        return back()->with('message', 'Bill updated.');
    }

    public function destroy(Bill $bill)
    {
        $bill->delete();

        return back()->with('message', 'Bill deleted.');
    }

}
