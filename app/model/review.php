<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\movie;

class review extends Model
{
    public function movie()
   {

      return $this->belongsTo(movie::class);
   }
}
