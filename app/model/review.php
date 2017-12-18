<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\movie;

class review extends Model
{

	protected $fillable = ['review','star','viewer'];
	
    public function movie()
   {

      return $this->belongsTo(movie::class);
   }
}
