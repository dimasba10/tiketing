<?php

namespace App\Http\Controllers;

use App\Models\Transportasi;
use App\Models\TypeTransportasi;
use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type1 = TypeTransportasi::all();
        $transportasi = Transportasi::all();
        return view('/admin/transportasi', ['dttransportasi' => $transportasi],compact('type1'));
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
        $type = TypeTransportasi::where('nama_type', $request->nama_type)->first();
        $transportasi =[
            'kode'                      => rand(100000, 999999),
            'jumlah_kursi'              => $request->jumlah_kursi,
            'keterangan'                => $request->keterangan,
            'id_type_transportasi'      => $type->id_type_transportasi,
        ];

        Transportasi::create($transportasi);
        return redirect('/transportasi');
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
        $transportasi = Transportasi::where('id_transportasi', $id)->first();
        return view('/transportasi')->with('dttransportasi', $transportasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transportasi =[
            'jumlah_kursi' => $request->input('jumlah_kursi'),
            'keterangan' => $request->input('keterangan'),
            'id_type_transportasi' => $request->input('id_type_transportasi'),
        ];
        Transportasi::where('id_transportasi', $id)->update($transportasi);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transportasi::where('id_transportasi', $id)->delete();
        return redirect('/transportasi')->with('succes','Berhasil melakukan delete');
    }
}
