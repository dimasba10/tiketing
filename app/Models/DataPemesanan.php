<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanans";
    protected $fillable = [
        'id_pemesanan',
        'kode_pemesanan',
        'tanggal_pemesanan',
        'tempat_pemesanan',
        'id_penumpang',
        'kode_kursi',
        'id_rute',
        'tujuan',
        'tanggal_berangkat',
        'jam_cekin',
        'jam_berangkat',
        'total_bayar',
        'id_petugas'
    ];
    // public static function data(){
    //     $pemesanan = DB::table('pemesanans')->get();
    //         return $pemesanan;
    // }
    public function penumpang()
    {
        return $this->belongsTo(DataPenumpang::class, 'id_penumpang', 'id_penumpang');
    }
    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id_petugas');
    }
    public function rute()
    {
        return $this->belongsTo(Rutes::class, 'id_rute', 'id_rute');
    }
}
