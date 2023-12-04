<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $fillable = [
        'id_petugas',
        'username',
        'password',
        'nama_petugas',
        'id_level'
    ];
    // public static function data(){
    //     $petugas = DB::table('petugas')->get();
    //         return $petugas;
    // }
    public function pemesanan()
    {
        return $this->hasMany(DataPemesanan::class, 'id_pemesanan','id_pemesanan');
    }
}
