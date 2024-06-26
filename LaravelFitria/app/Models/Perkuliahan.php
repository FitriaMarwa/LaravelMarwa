<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkuliahan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'email', 'alamat'];
    public function perkuliahans()
    {
        return $this-> hasMany(Perkuliahan::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
