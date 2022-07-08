<?php

namespace App\Models\pemesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pemesanan\penerbangan;

class pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_akomodasi',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'pemesanan_id', 'id');
    }

    public function penerbangan(){
        return $this->hasMany(penerbangan::class, 'pemesanan_id', 'id_pemesanan');
    }

    public function perhotelan(){
        return $this->hasMany(perhotelan::class, 'pemesanan_id', 'id_pemesanan');
    }
}
