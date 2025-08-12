<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }

    public function about() // Method baru untuk halaman
    {
        $namaAplikasi = "Aplikasi Web Sekolah";
        $pengembang = "Tim Pemrograman";
        $tahun = 2024;
        // Mengirim banyak variabel menggunakan fungsi
        return view('about', compact('namaAplikasi',
        'pengembang', 'tahun'));
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
    public function show(home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home $home)
    {
        //
    }
}
