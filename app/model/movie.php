<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\review; 

class movie extends Model
{
   public function reviews()
   {

      return $this->hasMany(review::class);
   }
}
