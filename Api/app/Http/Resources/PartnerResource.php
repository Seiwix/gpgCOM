<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
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
            'id' =>(string) $this->id,
            'type' => 'Partner',
            
                'tittle'=>$this->tittle,
                'description'=>$this->description,
                'link'=>$this->link,
                'image'=>'http://localhost:8000/storage/upload/'.$this->image,
                
                
            
       ];
    }
}
