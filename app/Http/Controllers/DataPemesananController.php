<?php

namespace App\Http\Controllers;

use App\Models\DataPemesanan;
use App\Models\DataPenumpang;
use App\Models\Petugas;
use App\Models\Rutes;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = DataPemesanan::all();
        return view('/admin/datapemesanan', ['dtpemesanan'=> $pemesanan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $pemesanan = DataPemesanan::data();
        // return view('/admin/pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $hashedPass = Hash::make($request->input('password'));
        $petugas = Petugas::where('id_petugas', $request->id_petugas)->first();
        $rute = Rutes::where('id_rute', $request->id_rute)->first();
        $penumpang = DataPenumpang::where('id_penumpang', $request->id_penumpang)->first();
        $harga = Rutes::where('id_rute',$request->id_rute)->value('harga');
        $pemesanan =[
            'id_pemesanan' => $request->input('id_pemesanan'),
            'kode_pemesanan' =>rand(100000, 999999),
            'tanggal_pemesanan' => $request->input('tanggal_pemesanan'),
            'tempat_pemesanan' => $request->input('tempat_pemesanan'),
            'id_penumpang' => $penumpang->id_penumpang,
            'kode_kursi' => rand(100,22),
            'id_rute' => $rute->id_rute,
            'tujuan'=> $request->input('tujuan'),
            'tanggal_berangkat'=> $request->input('tanggal_berangkat'),
            'jam_cekin'=> $request->input('jam_cekin'),
            'jam_berangkat'=> $request->input('jam_berangkat'),
            'total_bayar'=>$harga,
            'id_petugas'=> $petugas->id_petugas,
        ];
        DataPemesanan::create($pemesanan);
        return view('/pengguna/main');
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
        DataPemesanan::where('id_pemesanan', $id)->delete();
        return redirect('/datapemesanan')->with('succes','data berhasil di hapus');
    }
}
