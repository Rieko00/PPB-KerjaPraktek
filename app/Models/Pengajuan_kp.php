<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_kp extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'judul',
        'lembaga',
        'alamat',
        'pimpinan',
        'no_telp',
        'fax',
        'created_at',
        'updated_at',
    ];
}
