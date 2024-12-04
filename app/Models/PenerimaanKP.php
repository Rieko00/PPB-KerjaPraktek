<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaanKP extends Model
{
    protected $table = 'penerimaan_kp';

    protected $fillable = [
        'id_pengajuan_kp',
        'status_penerimaan',
        'keterangan',
        'file',
    ];
}
