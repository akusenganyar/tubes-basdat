<?php

namespace App\Models\pemesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penerbangan',
        'jumlah_penumpang',
        'asal_keberangkatan',
        'tujuan_keberangkatan',
        'tanggal_keberangkatan',
        'kelas_penerbangan',
    ];

    public function pemesanan(){
        return $this->belongsTo(pemesanan::class, 'id_pemesanan', 'pemesanan_id');
    }

    public function data_penumpang(){
        return $this->hasMany(data_penumpang::class, 'penerbangan_id', 'id_penerbangan');
    }
}
