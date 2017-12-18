<?php

namespace App\Http\Resources\review;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
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
            'id' => $this->id,
            'viewer' => $this->viewer,
            'body' => $this->review,
            'star' => $this->star,
            

        ];
    }
}
