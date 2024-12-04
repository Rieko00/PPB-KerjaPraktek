<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKp extends Model
{
    protected $table = 'laporan_kp';
    protected $fillable = [
        'id_pengajuan_kp',
        'status_laporan',
        'keterangan',
        'file',
        'file_revisi'

    ];
}
