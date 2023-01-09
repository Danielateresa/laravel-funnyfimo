<?php

namespace App\Http\Controllers;

use App\Models\Earring;
use App\Models\Ring;
use App\Http\Requests\StoreEarringRequest;
use App\Http\Requests\UpdateEarringRequest;

class EarringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function earringsDB()
    {
        $earrings = Earring::all();
        return view('earrings.earringsDB', compact('earrings'));
    }

    public function earringsShop()
    {
        $earrings = Earring::all();
        return view('earrings.earringsShop', compact('earrings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('earrings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEarringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEarringRequest $request, Earring $earrings)
    {
        $validated_data = $request->validated();
        $earring = Earring::create($validated_data);

        return to_route('earringsDB')->with('message', "New product $earrings->name added on database");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function show(Earring $earring)
    {
        return view('earrings.show', compact('earring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function edit(Earring $earring)
    {
        return view('earrings.edit', compact('earring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEarringRequest  $request
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEarringRequest $request, Earring $earring)
    {
        $validated_data = $request->validated();
        $earring->update($validated_data);

        return to_route('earringsDB')->with('message', "Product $earring->name modified");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Earring  $earring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Earring $earring)
    {
        $earring->delete();
        return to_route('earringsDB')->with('message', "Product $earring->name deleted");
    }
}
