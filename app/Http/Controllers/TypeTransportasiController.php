<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTransportasi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TypeTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typetransportasi = TypeTransportasi::all();
        return view('/admin/typetransportasi', ['dttypetransportasi' => $typetransportasi]);
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
        $hashedPass = Hash::make($request->input('password'));
        $typetransportasi =[
            'id_type_transportasi' => $request->input('id_type_transportasi'),
            'nama_type' => $request->input('nama_type'),
            'keterangan' => $request->input('keterangan'),
        ];
        TypeTransportasi::create($typetransportasi);
        return redirect('/typetransportasi');
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
        $typetransportasi = TypeTransportasi::where('id_type_transportasi', $id)->first();
        return view('/typetransportasi')->with('dttypetransportasi', $typetransportasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typetransportasi =[
            'id_type_transportasi' => $request->input('id_type_transportasi'),
            'nama_type' => $request->input('nama_type'),
            'keterangan' => $request->input('keterangan'),
        ];
        TypeTransportasi::where('id_type_transportasi', $id)->update($typetransportasi);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TypeTransportasi::where('id_type_transportasi', $id)->delete();
        return redirect('/typetransportasi')->with('succes','Berhasil melakukan delete');
    }
}
