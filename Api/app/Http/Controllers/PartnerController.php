<?php

namespace App\Http\Controllers;

use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PartnerResource::collection(Partner::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $uploaded_file = $request->file('file')->store('public/upload');
        $partner = new Partner;
        $partner->tittle= $request->tittle;
        $partner->description= $request->description;
        $partner->link = $request->link;
        $partner->image = $request->file->hashName();
        $result = $partner->save();
        if($result){
           return ["result"=>"Post Added"];
        }
        else 
        { 
           return ["result"=>"Post not Added"];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
         return new PartnerResource($partner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->update ([
            'tittle'=> $request->input('tittle'),
            'description'=> $request->input('description'),
            'link'=> $request->input('link'),
        ]);
        return new PartnerResource($partner); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {   $partner->delete();
       
        
        unlink(storage_path('app/public/upload/'.$partner->image));
        
       
        return response(null,204);
    }
}
