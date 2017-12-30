<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function lessons()
    {
      return $this->morphedByMany('App\Lesson','taggable');
    }

}
