<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SidangKp extends Model
{
    protected $table = 'sidang_kp';
    protected $fillable = [
        'id_pengajuan_kp',
        'keterangan',
        'tanggal',
        'jam',
        'ruangan',
        'penguji',
        'nilai',
    ];
    protected function casts(): array
    {
        return [
            'penguji' => 'array',
        ];
    }
}
