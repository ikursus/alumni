<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_id',
        'name',
        'nric',
        'email',
        'gender',
        'dob',
        'phone',
        'address',
        'race_id',
        'religion_id',
        'nationality_id',
        'gambar',
        'checkbox',
        'status_perkahwinan',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation diantara users dan table academics
    public function academics()
    {
        return $this->hasMany(Academik::class, 'user_id', 'userId');
    }
}
