<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutes;
use App\Models\Transportasi;
use Illuminate\Support\Facades\DB;

class RutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutes = Rutes::all();
        $transportasi = Transportasi::all();

        return view('/admin/rutes', ['dtrutes' => $rutes], compact('transportasi'));
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
        $transportasi = Transportasi::where('keterangan', $request->keterangan)->first();
        // $hashedPass = Hash::make($request->input('password'));
        Rutes::create([
            'id_rute' => $request->input('id_rute'),
            'tujuan' => $request->input('tujuan'),
            'rute_awal' => $request->input('rute_awal'),
            'rute_akhir' => $request->input('rute_akhir'),
            'harga' => $request->input('harga'),
            'id_transportasi' => $request->id_transportasi,
       ]);
        return redirect('/rutes');
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
        $rutes = Rutes::where('id_rute', $id)->first();
        return view('/rutes')->with('dtrute', $rutes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $transportasi = Transportasi::where('keterangan', $request->keterangan)->first();
        $rutes =[
            'id_rute' => $request->input('id_rute'),
            'tujuan' => $request->input('tujuan'),
            'rute_awal' => $request->input('rute_awal'),
            'rute_akhir' => $request->input('rute_akhir'),
            'harga' => $request->input('harga'),
            'id_transportasi' => $request->input('id_transportasi'),
        ];
        Rutes::where('id_rute', $id)->update($rutes);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rutes::where('id_rute', $id)->delete();
        return redirect('/rutes')->with('succes','Berhasil melakukan delete');
    }
}
