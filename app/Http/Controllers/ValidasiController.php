<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPemesanan;
use Illuminate\Support\Facades\DB;
use PDF;

class ValidasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = DB::table('pemesanans')->value('status');
        $pemesanan = DataPemesanan::all();
        return view('/admin.validasi', ['dtpemesanan' => $pemesanan]);
    }

    // public function donwloadpdf()
    // {
    //     $pemesanan = DataPemesanan::all();
    //     $pdf = PDF::loadview('admin.validasi',['dtvalidasi' => $pemesanan]);
    //     return $pdf->donwload('laporan_pemesanan.pdf');
    // }

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
        DataPemesanan::where('id_pemesanan', $id)->update(['status' => 1]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DataPemesanan::where('id_pemesanan', $id)->delete();
        return back();
    }
}
