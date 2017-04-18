<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurirT extends Model
{
    //
    public function kurirTs()
    {
        return $this->belongsToMany('App\Pengiriman');
    }
    public function toko()
    {
        return $this->belongsTo('App\Toko');
    }
}
