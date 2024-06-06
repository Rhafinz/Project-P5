<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_jurusan', 'image'];
    protected $visible = ['nama_jurusan', 'image'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_jurusan');
    }
}
