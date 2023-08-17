<?php

namespace App\Http\Controllers;

use App\Models\City;
//use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::paginate(10)
        ]);
    }

    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('customers.create', compact('cities' )); //bills
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'city_id' =>'required|integer',

        ]);

        Customer::create($data);

        return back()->with('message', 'Customer created.');
    }


    public function edit(Customer $customer)
    {
        $cities = City::orderBy('name')->get();
        return view ('customers.edit', compact('customer', 'cities')); //'bills
    }

    public function update(Customer $customer, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'city_id' =>'required|integer',
        ]);

        $customer->update($data);

        return back()->with('message', 'Customer updated.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with('message', 'Customer deleted.');
    }
}
