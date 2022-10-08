<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function Prodi() {
        return $this->belongsTo(Prodi::class);
    }
    use HasFactory;

    // protected $table ='mahasiswas';
    // protected $fillable = ['id', 'nama', 'nim', 'jurusan', 'angkatan'];

}
