<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplyResource extends JsonResource
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
            'type' => 'Apply',
            
                'name'=>$this->name,
                'email'=>$this->email,
                'message'=>$this->message,
                'created_at'=>$this->created_at,
                
                
                
            
       ];
    }
}
