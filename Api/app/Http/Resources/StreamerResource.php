<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StreamerResource extends JsonResource
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
            'type' => 'Streamer',
            
                'streamername'=>$this->streamername,
                'streamerid'=>$this->streamerid,
                'streamerimage'=>$this->streamerimage
                
                
                
            
       ];
    }
}
