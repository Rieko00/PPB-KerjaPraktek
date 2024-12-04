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

    public function pengajuanKp()
    {
        return $this->belongsTo(Pengajuan_kp::class, 'id_pengajuan_kp');
    }
    public function mahasiswa()
    {
        return $this->hasOneThrough(
            Mahasiswa::class,
            Pengajuan_kp::class,
            'id',              // Foreign key di tabel pengajuan_kp
            'id', // Foreign key di tabel mahasiswa
            'id_pengajuan_kp', // Local key di tabel proposal_kp
            'id_mahasiswa'     // Local key di tabel pengajuan_kp
        );
    }
}
