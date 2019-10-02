<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    // Nama table yang harus dihubungi
    protected $table = 'religions';
    
    // Mass assignment protection (filter data masuk ke table)
    protected $fillable = [
        'name'
    ];
}
