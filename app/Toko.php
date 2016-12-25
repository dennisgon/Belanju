<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    //
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
