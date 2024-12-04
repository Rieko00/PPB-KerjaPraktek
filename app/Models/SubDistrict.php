<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table = 'subdistrict';
    protected $primaryKey = 'subdis_id';
    protected $fillable = [
        'subdis_id',
        'dis_id',
        'subdis_name'
    ];
}
