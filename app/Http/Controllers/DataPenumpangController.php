<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenumpang;
use Illuminate\Support\Facades\Hash;

class DataPenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penumpang = DataPenumpang::all();
        return view('/admin/datapenumpang', ['dtpenumpang' => $penumpang]);
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
        $penumpang =[
            'id_penumpang' => $request->input('id_penumpang'),
            'username' => $request->input('username'),
            'password' => $hashedPass,
            'nama_penumpang' => $request->input('nama_penumpang'),
            'alamat_penumpang'=> $request->input('alamat_penumpang'),
            'tanggal_lahir'=> $request->input('tanggal_lahir'),
            'jenis_kelamin'=> $request->input('jenis_kelamin'),
            'telefon'=> $request->input('telefon'),
        ];
        DataPenumpang::create($penumpang);
        return redirect('/datapenumpang');
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
        $penumpang =[
            'id_penumpang' => $request->input('id_penumpang'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'nama_penumpang' => $request->input('nama_penumpang'),
            'alamat_penumpang' => $request->input('alamat_penumpang'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'telefon' => $request->input('telefon'),
        ];
        DataPenumpang::where('id_penumpang', $id)->update($penumpang);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DataPenumpang::where('id_penumpang', $id)->delete();
        return redirect('/datapenumpang')->with('succes','data berhasil di hapus');
    }
}
