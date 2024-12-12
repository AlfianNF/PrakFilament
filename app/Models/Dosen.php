<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable=[
        'nidn',
        'nama',
        'tanggal_lahir',
        'alamat',
        'kode_matkul'
    ];

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'kode_matkul', 'kode_matkul');
    }
}
