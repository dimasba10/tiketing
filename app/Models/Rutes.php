<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rutes extends Model
{
    use HasFactory;
    protected $table = "rutes";
    protected $fillable = [
        'tujuan',
        'rute_awal',
        'rute_akhir',
        'harga',
        'id_transportasi'
    ];
    // public static function data(){
    //     $rutes = DB::table('rutes')->get();
    //         return $rutes;
    // }

    public function transportasi()
    {
        return $this->belongsTo(Transportasi::class, 'id_transportasi', 'id_transportasi');
    }
    public function pemesanan()
    {
        return $this->hasMany(DataPemesanan::class, 'id_pemesanan','id_pemesanan');
    }
}
