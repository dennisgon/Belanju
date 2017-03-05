<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    public function toko()
    {
        return $this->belongsTo('App\Toko');
    }
    public function gambars()
    {
        return $this->hasMany('App\Gambar');
    }
    public function kategori()
    {
        return $this->hasOne('App\Category');
    }
}
