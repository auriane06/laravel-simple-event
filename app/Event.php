<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'days' => 'array',
    ];
    protected $fillable = ['id', 'name', 'start_date', 'end_date', 'days'];

}
