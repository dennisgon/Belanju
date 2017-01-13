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
}
