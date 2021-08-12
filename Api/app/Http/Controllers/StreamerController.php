<?php

namespace App\Http\Controllers;

use App\Http\Resources\StreamerResource;
use App\Models\Streamer;
use Illuminate\Http\Request;

class StreamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  StreamerResource::collection(Streamer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $streamer = Streamer::create([
            'streamername' =>$request->input('streamername'),
            'streamerid'=>$request->input('streamerid'),
            'streamerimage'=>$request->input('streamerimage')
        ]);
        return new StreamerResource($streamer);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function show(Streamer $streamer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function edit(Streamer $streamer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Streamer $streamer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streamer  $streamer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streamer $streamer)
    {   
        $streamer->delete();
        return response(null,204);
    }
}
