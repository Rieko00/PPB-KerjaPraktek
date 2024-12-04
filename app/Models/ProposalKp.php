<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProposalKp extends Model
{
    protected $fillable = [
        'id_pengajuan_kp',
        'status_proposal',
        'keterangan',
        'file',
    ];
}
