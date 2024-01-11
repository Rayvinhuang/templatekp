<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Membership;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        return view("Customer.index")->with("customers", $customer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Customer $customer)
    {
        $membership = Membership::all();
        return view("Customer.create")->with("membership", $membership);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "namaCustomer" => "required",
            "membership_id" => "required",
            "noTelp" => "required"
        ]);

        Customer::create($validasi);

        return redirect('customer')->with("Success","Data Customer berhasil disimpan");

    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $membership = Membership::all();
        return view('Customer.edit')->with("customer", $customer)->with("membership", $membership);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validasi = $request->validate([
            "namaCustomer" => "required",
            "membership_id" => "required",
            "noTelp" => "required"
        ]);

        $customer->update($validasi);
        return redirect('customer')->with("Success", "Data Customer berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customer')->with('Success', 'Data Customer Berhasil Dihapus');
    }

}
