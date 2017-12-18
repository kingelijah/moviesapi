<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\review; 

class movie extends Model
{
   protected $fillable = [
    
    'title', 'description', 'genre', 'country', 'producer'

   ];

   public function reviews()
   {

      return $this->hasMany(review::class);
   }
}
