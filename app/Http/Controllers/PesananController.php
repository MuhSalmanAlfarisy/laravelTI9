<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\Pesanan;
use App\Models\Produk;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        
        $pesanan = DB::table('pesanan')
            ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
            ->select('pesanan.*', 'produk.nama as nama_produk')
            ->get();
        //perintah join diatas untuk menggabungkan tabel pesanan dan produk
        return view('admin.produk.pesanan', compact('pesanan', 'produk'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}