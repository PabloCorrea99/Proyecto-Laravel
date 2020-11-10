<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'body' => $this->getBody(),
            'image' => $this->getImage(),
            
        ];
    }
}
