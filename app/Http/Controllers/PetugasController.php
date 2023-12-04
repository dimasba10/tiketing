<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $petugas = Petugas::all();
       return view('/admin/datapetugas', ['dtpetugas' => $petugas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$petugas = Petugas::data();
        //return view('/admin/datapetugas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hashedPass = Hash::make($request->input('password'));
        $petugas =[
            'id_petugas' => $request->input('id_petugas'),
            'username' => $request->input('username'),
            'password' => $hashedPass,
            'nama_petugas' => $request->input('nama_petugas'),
            'id_level'=> $request->input('id_level'),
        ];
        Petugas::create($petugas);
        return redirect('/datapetugas');
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
        $petugas = Petugas::where('id_petugas', $id)->first();
        return view('/datapetugas')->with('dtpetugas', $petugas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $petugas =[
            'id_petugas' => $request->input('id_petugas'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'nama_petugas' => $request->input('nama_petugas'),
            'id_level' => $request->input('id_level'),
        ];
        Petugas::where('id_petugas', $id)->update($petugas);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Petugas::where('id_petugas', $id)->delete();
        return redirect('/datapetugas')->with('succes','Berhasil melakukan delete');
    }
}
