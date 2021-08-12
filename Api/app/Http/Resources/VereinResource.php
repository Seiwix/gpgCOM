<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VereinResource extends JsonResource
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
            'type' => 'Verein',
            
                'tittle'=>$this->tittle,
                'description'=>$this->description,
                'image'=>'http://localhost:8000/storage/upload/'.$this->image,
                
            
       ];
    }
}
