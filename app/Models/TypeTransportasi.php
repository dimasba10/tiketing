<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeTransportasi extends Model
{
    use HasFactory;
    protected $table = "type_transportasis";
    protected $fillable = [
        'id_type_transportasi',
        'nama_type',
        'keterangan'
    ];
    // public static function data(){
    //     $typetransportasi = DB::table('type_transportasis')->get();
    //         return $typetransportasi;
    // }
    public function transportasi()
    {
        return $this->hasMany(Transportasi::class, 'id_transportasi', 'id_transportasi');
    }
}
