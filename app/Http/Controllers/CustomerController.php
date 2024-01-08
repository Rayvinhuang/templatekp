<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
    public function create()
    {
        return view('Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request ->validate([
            "namacustomer" = "required|unique,customer",
            "membership_id" =>"required",
            "alamat" =>"required",
             
        ]);
        return redirect('jenisMenu')->with("success","Data jenisMenu berhasil disimpan");

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $Customer = Customer::where('id', $id)->update($validate);
        if($Customer){
            $response['success'] = true;
            $response['message'] = 'Customer berhasil diperbarui';
            return response()->json($response, Response::HTTP_OK);
        }
        else{
            $response['success'] = false;
            $response['message'] = 'Customer gagal diperbarui';
            return response()->json($response, Response::HTTP_NOT_FOUND);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $Customer = Customer::where('id', $id);
        if($Customer){
            $Customer->delete();
            $response['success'] = true;
            $response['message'] = 'Customer berhasil dihapus';
            return response()->json($response, Response::HTTP_OK);
        }
        else{
            $response['success'] = false;
            $response['message'] = 'Data Customer tidak ditemukan';
            return response()->json($response, Response::HTTP_NOT_FOUND);
    }
}
