<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    //
    protected $table = 'pengirimans';
    public function KurirTs()
    {
        return $this->belongsToMany('App/KurirT');
    }

}
