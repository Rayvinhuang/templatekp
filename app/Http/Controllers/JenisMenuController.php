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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisMenu $jenisMenu)
    {
        //
    }
}
