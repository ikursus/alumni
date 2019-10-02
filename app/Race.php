<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'race';

    protected $fillable = [
        'name'
    ];
}
