<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    //
    public function produk()
    {
        return $this->belongsTo('App\Produk');
    }
}
