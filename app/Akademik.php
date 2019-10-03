<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $fillable = [
        'user_id',
        'kelulusan',
        'tahun_konvo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
