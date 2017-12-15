<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','userimage'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * Get Todo of User
    *
    */
    public function todo()
    {
        return $this->hasMany('App\Todo');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasPermission(Permission $permission)
    {
        return !! optional(optional($this->role)->permission)->contains($permission);
    }
}
