<?php

namespace App\Http\Controllers;

use App\Models\Detail_bill;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Http\Request;

class Detail_billController extends Controller
{
    public function index()
    {
        return view('detail_bills.index', [
            'detail_bills' => Detail_bill::paginate(10)
        ]);
    }

    public function create()
    {
        $bills = Bill::orderBy('total')->get();
        $products = Product::orderBy('name')->get();
        return view('detail_bills.create', compact( 'bills', 'products'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|max:255',
            'price' => 'required|max:255',
            'bill_id' => 'required|integer',
            'product_id' => 'required|integer',

        ]);

        Detail_bill::create($data);

        return back()->with('message', 'Detail_bill created successfully');
    }

    public function edit(Detail_bill $detail_bills)
    {
        $bills = Bill::orderBy('total')->get();
        $products = Product::orderBy('name')->get();
        return view('detail_bills.edit', compact('detail_bills', 'bills', 'products'));
    }

    public function update( detail_bill $detail_bill, Request $request)
    {
        $data =$request->validate([
            'amount' => 'required|max:255',
            'price' => 'required|max:255',
            'bill_id' => 'required|integer',
            'product_id' => 'required|integer',

        ]);

        $detail_bill->update($data);

        return back()->with('message', 'Detail_bill updated.');
    }

    public function destroy(Detail_bill $detail_bill)
    {
        $detail_bill->delete();

        return back()->with('message', 'Detail_bill deleted.');
    }
}
