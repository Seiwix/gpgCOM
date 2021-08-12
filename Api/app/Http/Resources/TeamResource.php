<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
            'type' => 'Team',
            
                'tittle'=>$this->tittle,
                'role'=>$this->role,
                'description'=>$this->description,
                'image'=>'http://localhost:8000/storage/upload/'.$this->image,
                
            
       ];
    }
}
