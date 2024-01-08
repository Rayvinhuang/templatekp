<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
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
    public function show(Minuman $minuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Minuman $minuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Minuman $minuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Minuman $minuman)
    {
        //
    }
}
