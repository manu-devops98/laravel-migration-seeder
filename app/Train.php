<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'agency', //string
        'departure', //string
        'arrival', //string
        'departure_time', //string
        'arrival_time', //string
        'code', //string
        'carriage', //int
        'date', //date
        'in_time', //bool
        'deleted', //bool
    ];
}
