<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $touches = ['user'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
