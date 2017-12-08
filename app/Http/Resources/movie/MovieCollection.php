<?php

namespace App\Http\Resources\movie;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\Resource;

class MovieCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
            'country' => $this->country,
            'href' => 
            [
                'link' => route('movies.show',$this->id)
            ]

        ];
    }
}
