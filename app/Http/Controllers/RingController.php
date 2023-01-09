<?php

namespace App\Http\Controllers;

use App\Models\Ring;
use App\Http\Requests\StoreRingRequest;
use App\Http\Requests\UpdateRingRequest;

class RingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function ringsDB()
    {
        $rings = Ring::all();
        return view('rings.ringsDB', compact('rings'));
    }

    public function ringsShop()
    {
        $rings = Ring::all();
        return view('rings.ringsShop', compact('rings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRingRequest $request, Ring $ring)
    {
        $validated_data = $request->validated();
        $ring = Ring::create($validated_data);

        return to_route('ringsDB')->with('message', "New product $ring->name added on database");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring)
    {
        return view('rings.show', compact('ring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring)
    {
        return view('rings.edit', compact('ring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRingRequest  $request
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRingRequest $request, Ring $ring)
    {
        $validated_data = $request->validated();

        $ring->update($validated_data);
        return to_route('ringsDB')->with('message', "Product $ring->name modified");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ring $ring)
    {
        $ring->delete();
        return to_route('ringsDB')->with('message', "Product $ring->name deleted");
    }
}
