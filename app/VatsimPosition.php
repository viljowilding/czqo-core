<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VatsimPosition extends Model
{
    protected $fillable = [
        'callsign', 'type', 'staff_only'
    ];
}