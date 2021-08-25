<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Models\Publication;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Publication as PublicationResource;

class Application extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name'=>$this->last_name,
            'message'=>$this->message,
            'status'=>$this->status,
            'user' => /*'/api/users/' .*/ $this->user_id,
            'publication'=>/*'api/publications/'.*/$this->publication_id,
            'business_name'=>$this->publication->business_name,
            'updated_at' => $this->updated_at,
        ];
    }
}