<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    //
    public function toko()
    {
        return $this->belongsTo('App\Toko');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
