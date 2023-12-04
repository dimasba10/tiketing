<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPenumpang extends Model
{
    use HasFactory;
    protected $table = "penumpangs";
    protected $fillable = [
        'id_penumpang',
        'username',
        'password',
        'nama_penumpang',
        'alamat_penumpang',
        'tanggal_lahir',
        'jenis_kelamin',
        'telefon'
    ];
    // public static function data(){
    //     $penumpang = DB::table('penumpangs')->get();
    //         return $penumpang;
    // }
    public function pemesanan()
    {
        return $this->hasMany(DataPemesanan::class, 'id_pemesanan','id_pemesanan');
    }
}
