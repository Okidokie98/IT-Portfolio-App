<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use App\Http\Requests\StorePopRequest;
use App\Http\Requests\UpdatePopRequest;

class PopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pops.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pop $pop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pop $pop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePopRequest $request, Pop $pop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pop $pop)
    {
        //
    }
}
