<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function alamats()
    {
        return $this->hasMany('App\Alamat');
    }
    public function tokos()
    {
        return $this->belongsToMany('App\Toko');
    }
    public function pesans()
    {
        return $this->hasMany('App\Pesan');
    }
}
