<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function forums()
    {
        return $this->hasManyThrough('App\Forum','App\User');
    }
}
