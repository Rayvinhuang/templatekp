<?php

namespace App\Http\Controllers;

use App\Models\JenisMenu;
use Illuminate\Http\Request;

class JenisMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisMenu = JenisMenu::all();
        return view("JenisMenu.index")->with("jenis_menus", $jenisMenu);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("jenisMenu.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "namaJenis" => "required",
        ]);
        // simpan data ke table Makanan
        JenisMenu::create($validasi);
        return redirect('jenisMenu')->with("Success", "Daftar Jenis Menu berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisMenu = JenisMenu::find($id);
        return view('jenisMenu.edit')->with("jenisMenu", $jenisMenu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "namaJenis" => "required",
        ]);
        // simpan data ke table Makanan
        JenisMenu::find($id)->update($validasi);
        return redirect('jenisMenu')->with("Success", "Data Jenis Menu berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenisMenu = JenisMenu::find($id);
        $jenisMenu->delete();
        return redirect('jenisMenu')->with('Success', 'Data Berhasil Dihapus');
    }
}
