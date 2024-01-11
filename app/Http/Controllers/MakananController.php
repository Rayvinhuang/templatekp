<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\JenisMenu;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = Makanan::all();
        return view("Makanan.index")->with("makanans", $makanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $jenisMenu = JenisMenu::all();
       return view("Makanan.create")->with("jenisMenu", $jenisMenu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "namaMakanan" => "required",
            "jenis_id" => "required",
            "harga" => "required"
        ]);
        // simpan data ke table Makanan
        Makanan::create($validasi);
        return redirect('makanan')->with("Success", "Daftar Makanan berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan)
    {
        $jenisMenu = JenisMenu::all();
        return view('Makanan.edit')->with("makanan", $makanan)->with("jenisMenu", $jenisMenu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan)
    {
        $validasi = $request->validate([
            "namaMakanan" => "required",
            "jenis_id" => "required",
            "harga" => "required"
        ]);
        // simpan data ke table Makanan
        $makanan->update($validasi);
        return redirect('makanan')->with("Success", "Data Makanan berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        return redirect('makanan')->with('Success', 'Data Makanan Berhasil Dihapus');
    }
}
