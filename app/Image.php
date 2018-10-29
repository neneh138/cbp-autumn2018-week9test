<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function Hero(){
        return $this->belongsTo('App\Hero');

    }
}
