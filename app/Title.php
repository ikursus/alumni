<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'name'
    ];
    
    // Relationship to table users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
