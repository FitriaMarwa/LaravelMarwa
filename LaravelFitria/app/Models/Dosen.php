<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nidn', 'email', 'alamat'];
    public function perkuliahans()
    {
        return $this-> hasMany(Perkuliahan::class);
    }
}
