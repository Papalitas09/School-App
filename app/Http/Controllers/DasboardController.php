<?php

namespace App\Http\Controllers;

use App\Models\Dasboard;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namaAdmin = "Satria D Juanda";
        $jumlahSiswa = 900;
        $jumlahGuru = 50;
        return view('dasboard', compact('namaAdmin', 'jumlahSiswa', 'jumlahGuru'));
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
    public function show(Dasboard $dasboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dasboard $dasboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dasboard $dasboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dasboard $dasboard)
    {
        //
    }
}
