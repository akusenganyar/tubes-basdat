<?php

namespace App\Models\pemesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perhotelan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_kamar',
        'jumlah_kamar',
        'tanggal_check_in',
        'tanggal_check_out',
    ];

    public function pemesanan(){
        return $this->belongsTo(pemesanan::class, 'id_pemesanan', 'pemesanan_id');
    }

    public function data_penumpang(){
        return $this->hasMany(data_penumpang::class, 'perhotelan_id', 'id_perhotelan');
    }
}
