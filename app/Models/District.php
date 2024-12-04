<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'dis_id';
    protected $fillable = [
        'dis_id',
        'city_id',
        'dis_name'
    ];
}
