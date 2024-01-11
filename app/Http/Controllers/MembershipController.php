<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membership = Membership::all();
        return view("Membership.index")->with("memberships", $membership);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Membership.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "jenisMembership" => "required",
        ]);
        // simpan data ke table Makanan
        Membership::create($validasi);
        return redirect('membership')->with("Success", "Daftar Membership berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $membership = Membership::find($id);
        return view('Membership.edit')->with("membership", $membership);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "jenisMembership" => "required",
        ]);
        // simpan data ke table Makanan
        Membership::find($id)->update($validasi);
        return redirect('membership')->with("Success", "Daftar Membership berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $membership = membership::find($id);
        $membership->delete();
        return redirect('membership')->with('Success', 'Data Membership Berhasil Dihapus');
    }
}
