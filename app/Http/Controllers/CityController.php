<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Department;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('cities.index', [
           'cities' => City::paginate(10)
        ]);
    }

    public function create()
    {

        $departments = Department::orderBy('name')->get();
        return view('cities.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'department_id' =>'required|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        City::create($data);

        return back()->with('message', 'City created.');
    }

    public function edit(City $city)
    {
        $departments = Department::orderBy('name')->get();
        return view ('cities.edit', compact('city',  'departments'));
    }

    public function update(City $city, Request $request)
    {
        $data = $request->validate([
            'department_id' =>'required|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $city->update($data);

        return back()->with('message', 'City updated.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return back()->with('message', 'City deleted.');
    }
}
