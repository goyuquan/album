<?php

namespace App;

use App\Album;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
