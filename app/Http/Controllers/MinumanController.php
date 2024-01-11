<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use App\Models\JenisMenu;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minuman = Minuman::all();
        return view("Minuman.index")->with("minumen", $minuman);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisMenu = JenisMenu::all();
        return view("Minuman.create")->with("jenisMenu", $jenisMenu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "namaMinuman" => "required",
            "jenis_id" => "required",
            "harga" => "required"
        ]);
        // simpan data ke table Makanan
        Minuman::create($validasi);
        return redirect('minuman')->with("Success", "Daftar Minuman berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Minuman $minuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Minuman $minuman)
    {
        $jenisMenu = JenisMenu::all();
        return view('Minuman.edit')->with("minuman", $minuman)->with("jenisMenu", $jenisMenu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Minuman $minuman)
    {
        $validasi = $request->validate([
            "namaMinuman" => "required",
            "jenis_id" => "required",
            "harga" => "required"
        ]);
        // simpan data ke table Makanan
        $minuman->update($validasi);
        return redirect('minuman')->with("Success", "Daftar Minuman berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Minuman $minuman)
    {
        $minuman->delete();
        return redirect('minuman')->with('Success', 'Data Minuman Berhasil Dihapus');
    }
}
