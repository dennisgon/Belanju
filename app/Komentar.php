<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //\
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function produk()
    {
        return $this->belongsTo('App\Produk');
    }
}
