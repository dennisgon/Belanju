<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function produks()
    {
        return $this->hasMany('App\Produk');
    }
    public function pesans()
    {
        return $this->hasMany('App\Pesan');
    }
    public function pengiriman()
    {
        return $this->hasOne('App\KurirT');
    }

}
