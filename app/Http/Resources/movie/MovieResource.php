<?php

namespace App\Http\Resources\movie;

use Illuminate\Http\Resources\Json\Resource;

class MovieResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'title' => $this->title ,
            'description' => $this->description,
            'genre' => $this->genre,
            'producer' => $this->producer,
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'no rating yet',
            'country' => $this->country,
            'href' => [
              
              'reviews' => route('reviews.index',$this->id)
            ]

        ];
    }
}
