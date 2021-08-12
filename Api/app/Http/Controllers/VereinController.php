<?php

namespace App\Http\Controllers;

use App\Http\Resources\VereinResource;
use App\Models\Verein;
use Illuminate\Http\Request;

class VereinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VereinResource::collection(Verein::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $uploaded_file = $request->file('file')->store('public/upload');
        $verein = new Verein;
        $verein->tittle= $request->tittle;
        $verein->description= $request->description;
        $verein->image = $request->file->hashName();
        $result = $verein->save();
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
     * @param  \App\Models\Verein  $verein
     * @return \Illuminate\Http\Response
     */
    public function show(Verein $verein)
    {
        return new VereinResource($verein);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verein  $verein
     * @return \Illuminate\Http\Response
     */
    public function edit(Verein $verein)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verein  $verein
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verein $verein)
    {
        $verein->update ([
            'tittle' =>$request->input('tittle'),
            'description'=>$request->input('description'),
        ]);
        return new VereinResource($verein);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verein  $verein
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verein $verein)
    {
        $verein->delete();
        unlink(storage_path('app/public/upload/'.$verein->image));
        return response(null,204);
    }
}
