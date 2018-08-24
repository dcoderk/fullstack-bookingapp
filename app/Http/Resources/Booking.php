<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Booking extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id'         =>    $this->id,
            'name'       =>    $this->name,
            'bookdate'   =>    $this->bookdate,
            'message'    =>    $this->message
        ];
    }
}
