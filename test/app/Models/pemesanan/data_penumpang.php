<?php

namespace App\Models\pemesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_penumpang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penumpang',
        'NIK',
        'usia',
        'domisili',
        'no_hp',
    ];

    public function penerbangan(){
        return $this->belongsTo(penerbangan::class, 'penerbangan_id', 'id_penerbangan');
    }

    public function perhotelan(){
        return $this->belongsTo(perhotelan::class, 'perhotelan_id', 'id_perhotelan');
    }
}
