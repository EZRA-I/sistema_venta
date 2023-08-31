<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Category;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        return view('providers.index', [
            'providers' => Provider::paginate(10)
        ]);
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $cities = City::orderBy('name')->get();
        return view('providers.create', compact('categories','cities' )); //bills
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'post' => 'required|max:255',
            'address' => 'required|max:255',
            'category_id' =>'required|integer',
            'city_id' =>'required|integer',
        ]);

        Provider::create($data);

        return back()->with('message', 'Provider created.');
    }




    public function edit(Provider $provider)
    {
        $categories = Category::orderBy('name')->get();
        $cities = City::orderBy('name')->get();
        return view ('providers.edit', compact('provider', 'categories','cities'));
    }

    public function update(Provider $provider, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'post' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'category_id' =>'required|integer',
            'city_id' =>'required|integer',
        ]);

        $provider->update($data);

        return back()->with('message', 'Provider updated.');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return back()->with('message', 'Provider deleted.');
    }
}
