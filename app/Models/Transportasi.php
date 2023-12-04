<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transportasi extends Model
{
    use HasFactory;
    protected $table = "transportasis";
    protected $fillable = [
        'id_transportasi',
        'kode',
        'jumlah_kursi',
        'keterangan',
        'id_type_transportasi'
    ];
    // public static function data(){
    //     $transportasi = DB::table('transportasis')->get();
    //         return $transportasi;
    // }
    public function type()
    {
        return $this->belongsTo(TypeTransportasi::class, 'id_type_transportasi', 'id_type_transportasi');
    }

    public function rute()
    {
        return $this->hasMany(Rutes::class, 'id_rute', 'id_rute');
    }
}
