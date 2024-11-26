<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_kp extends Model
{
    protected $fillable = [
        'tanggal_pengajuan',
        'status_pengajuan',

    ];
}
